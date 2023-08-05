```sql
SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;
```

```console
MariaDB [dane3]> SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;
+----+-------------+---------------------------------------------------------------------------------+---------------+
| id | nazwa       | opis                                                                            | zdjecie       |
+----+-------------+---------------------------------------------------------------------------------+---------------+
|  9 | Star Wars 1 | Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy                  | star-wars.jpg |
| 11 | E.T.        | Przybysz z innej planety zaprzyjaznia sie z chlopcem i jego rodzina.            | et.jpg        |
| 13 | hobbit2     | Hobbit Bilbo Baggins wyrusza w niebezpieczna podroz z czarodziejem Gandalfem... | hobbit.jpg    |
| 14 | Fantasy2    | Elfy, krasnoludy i inne fantastyczne itstoty w walce o swoja planete.           | fantasy.jpg   |
| 16 | hobbit3     | Hobbit Bilbo Baggins wyrusza w niebezpieczna podroz z czarodziejem Gandalfem... | hobbit.jpg    |
| 17 | Star Wars 2 | Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy                  | star-wars.jpg |
| 19 | Fantasy     | Elfy, krasnoludy i inne fantastyczne istoty w walce o swoja planete.            | fantasy.jpg   |
| 20 | Star Wars 3 | Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy                  | star-wars.jpg |
| 21 | hobbit      | Hobbit Bilbo Baggins wyrusza w niebezpieczna podroz z czarodziejem Gandalfem... | hobbit.jpg    |
| 24 | Star Wars 4 | Luke Skywalker i ksiezniczka Leia w walce z ciemna strona mocy                  | star-wars.jpg |
| 25 | SteamPunk   | Wizja postapokaliptycznej planety                                               | steampunk.jpg |
+----+-------------+---------------------------------------------------------------------------------+---------------+
11 rows in set (0,001 sec)

```