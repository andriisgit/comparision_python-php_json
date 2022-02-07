<?php
ini_set('memory_limit', '3096M');
$start_time = microtime(true);

$data = json_decode(file_get_contents('export_ungrouped.json', false), true);

printf('--- Loading file tooks %s sec --- %s', (microtime(true) - $start_time), PHP_EOL);

$start_time = microtime(true);

$matrix = [];

foreach ($data['rows'] as $row) {
    $dt = date('Y-m-d', $row['data']);


    if (!empty($row['position'])) {
        $pos = $row['position'];
    } else {
        $pos = 'Не опр.';
    }

    if (!array_key_exists($dt, $matrix)) {
        $matrix[$dt] = [];
    }

    if (!array_key_exists($pos, $matrix[$dt])) {
        $matrix[$dt][$pos] = ['answer' => 0, 'connect' => 0, 'bill' => 0];
    }

    if ($row['event'] == 3) {
        $matrix[$dt][$pos]['answer'] += 1;
    }

    if ($row['event'] == 4) {
        $matrix[$dt][$pos]['connect'] += 1;
        $matrix[$dt][$pos]['bill'] += ($row['endcall'] - $row['data4']);
    }
}

printf('--- Composing matrix and calculate tooks %s sec --- %s', (microtime(true) - $start_time), PHP_EOL);

//print_r($matrix);
//print_r(PHP_EOL);
