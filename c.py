from datetime import datetime
import time
import json

start_time = time.time()

with open("export_ungrouped.json", "r", encoding="utf-8") as read_file:
    data = json.load(read_file)

print("--- Loading file tooks %s sec ---" % (time.time() - start_time))
start_time = time.time()

matrix = {}

for row in data['rows']:
    dt = datetime.fromtimestamp(row['data']).strftime('%Y-%m-%d')

    if bool(row['position']):
        pos = row['position']
    else:
        pos = 'Не опр.'

    if not dt in matrix:
        matrix.update({dt: {}})

    if not pos in matrix[dt]:
        matrix[dt][pos] = {'answer': 0, 'connect': 0, 'bill': 0}

    if row['event'] == 3:
        matrix[dt][pos]['answer'] += 1

    if row['event'] == 4:
        matrix[dt][pos]['connect'] += 1
        matrix[dt][pos]['bill'] += (row['endcall'] - row['data4'])

print("--- Composing matrix and calculate tooks %s sec ---" % (time.time() - start_time))
#print(matrix)
