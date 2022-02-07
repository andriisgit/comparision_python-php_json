![GitHub language count](https://img.shields.io/github/languages/count/andriisgit/comparision_python-php_json?style=flat)
![Python](https://img.shields.io/badge/python-3670A0?style=flat&logo=python&logoColor=ffdd54)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=flat&logo=php&logoColor=white)

Орієнтовне порівняння швидкості виконання скрипту на Python та PHP в різних середовищах.
Скрипт реалізує один і той самий алгоритм. Швидкість вимірюється в двох місцях:
- завантаження текстового json файлу, що містить прибл. 770 тис записів та парсинг його у змінну (колонка _JSON loading_)
- прохід циклом та сума записів залежно від двох умов (колонка _Calculating_ )  


| Середовище виконання | Тип носія з якого запуск | Версія Python | Версія PHP | JSON loading | Calculating |
|:--------------------:|:------------------------:|:-------------:|:----------:|:------------:|:----------------:|
|      Debian 11       |           HDD            |     3.9.2     |     -      |     3.8      |       2.1        |
|      Debian 11       |           HDD            |       -       |    8.0     |     2.0      |       4.2        |
|      Debian 11       |           SSD            |     3.9.2     |     -      |     4.4      |       2.2        |
|      Debian 11       |           SSD            |       -       |    8.0     |     2.0      |       4.2        |
|      Ubuntu 16       |            ?             |     2.7.1     |     -      |     8.8      |       6.6        |
|      Ubuntu 16       |            ?             |       -       |    5.6     |     8.2      |       12.8       |
|        Win 10        |           HDD            |     3.10      |     -      |     5.6      |       4.2        |
|        Win 10        |           HDD            |       -       |    7.3     |     4.2      |       4.7        |
|        Win 10        |           HDD            |     3.10      |     -      |     5.4      |       4.4        |
|        Win 10        |           HDD            |       -       |    8.0     |     3.4      |       1.2        |

Також, вкладено скріншоти та файл з порівняльною таблицєю
