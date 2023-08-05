```sql
DELETE FROM produkty WHERE id = 15;
```

```console
MariaDB [dane3]> DELETE FROM produkty WHERE id = 15;
Query OK, 1 row affected (0,001 sec)

MariaDB [dane3]> SELECT * FROM produkty;
+----+------------+---------------+----------------+-------+---------------------------------------------------------------------------------+-------+--------------------+
| id | Rodzaje_id | Producenci_id | nazwa          | ilosc | opis                                                                            | cena  | zdjecie            |
+----+------------+---------------+----------------+-------+---------------------------------------------------------------------------------+-------+--------------------+
|  1 |          1 |             8 | gruszka        |    20 | Klaps                                                                           |  2.56 | gruszka.jpg        |
|  2 |          1 |             6 | morela         |    30 |                                                                                 |  5.78 | morela.jpg         |
|  3 |          1 |             8 | arbuz          |     2 | czerwony                                                                        |  2.56 | arbuz.jpg          |
|  4 |          1 |             5 | papaja         |     5 |                                                                                 |  6.99 | papaja.jpg         |
|  5 |          2 |             4 | marchew        |   100 |                                                                                 |  1.56 | marchew.jpg        |
|  6 |          2 |             7 | ziemniak       |   120 | irys                                                                            |  3.33 | ziemniak.jpg       |
|  7 |          2 |             7 | koper          |     2 | natka                                                                           |  1.56 | koper.jpg          |
|  8 |          2 |             4 | papryka        |    50 | zielona                                                                         | 10.99 | papryka.jpg        |
|  9 |         12 |            10 | Star Wars 1    |     1 | Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy                  |    25 | star-wars.jpg      |
| 10 |          7 |             9 | Alien          |     1 | Zaloga statku Nostromo odbiera tajemniczy sygnal i laduje na planetoidzie...    |    20 | alien.jpg          |
| 11 |         12 |            10 | E.T.           |     1 | Przybysz z innej planety zaprzyjaznia sie z chlopcem i jego rodzina.            |    30 | et.jpg             |
| 12 |          7 |             9 | Alien2         |     1 | Zaloga statku Nostromo odbiera tajemniczy sygnal i laduje na planetoidzie...    |    20 | alien.jpg          |
| 13 |         12 |            10 | hobbit2        |     1 | Hobbit Bilbo Baggins wyrusza w niebezpieczna podroz z czarodziejem Gandalfem... |    30 | hobbit.jpg         |
| 14 |         12 |            10 | Fantasy2       |     1 | Elfy, krasnoludy i inne fantastyczne itstoty w walce o swoja planete.           |    10 | fantasy.jpg        |
| 16 |         12 |            10 | hobbit3        |     1 | Hobbit Bilbo Baggins wyrusza w niebezpieczna podroz z czarodziejem Gandalfem... |    30 | hobbit.jpg         |
| 17 |         12 |            10 | Star Wars 2    |     1 | Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy                  |    25 | star-wars.jpg      |
| 18 |          7 |             9 | Alien4         |     1 | Zaloga statku Nostromo odbiera tajemniczy sygnal i laduje na planetoidzie...    |    20 | alien.jpg          |
| 19 |         12 |            10 | Fantasy        |     1 | Elfy, krasnoludy i inne fantastyczne istoty w walce o swoja planete.            |    10 | fantasy.jpg        |
| 20 |         12 |            10 | Star Wars 3    |     1 | Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy                  |    25 | star-wars.jpg      |
| 21 |         12 |            10 | hobbit         |     1 | Hobbit Bilbo Baggins wyrusza w niebezpieczna podroz z czarodziejem Gandalfem... |    30 | hobbit.jpg         |
| 22 |         11 |            11 | Koralowa wyspa |     1 | Hamprey Bogart w jednej ze swoich wielkich rol.                                 |    10 | koralowa_wyspa.jpg |
| 23 |         13 |            10 | krokodyl       |     1 | Gigantyczny krokodyl atakuje pewne miasto.                                      |    10 | krokodyl.jpg       |
| 24 |         12 |            10 | Star Wars 4    |     1 | Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy                  |    25 | star-wars.jpg      |
| 25 |         12 |            10 | SteamPunk      |     1 | Wizja postapokaliptycznej planety                                               |    15 | steampunk.jpg      |
+----+------------+---------------+----------------+-------+---------------------------------------------------------------------------------+-------+--------------------+
24 rows in set (0,001 sec)


```