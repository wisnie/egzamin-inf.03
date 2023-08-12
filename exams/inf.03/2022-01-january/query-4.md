```sql
UPDATE pracownicy SET stanowisko = 4 WHERE stanowisko = 3;
```

```console
MariaDB [baza]> SELECT * FROM pracownicy;
+----+------------+-----------+------------+
| id | imie       | nazwisko  | stanowisko |
+----+------------+-----------+------------+
|  1 | Jan        | Marchewka |          1 |
|  2 | Michał     | Talerz    |          1 |
|  3 | Marek      | Potrzeba  |          4 |
|  4 | Andrzej    | Gawron    |          3 |
|  5 | Zdzisław   | Szary     |          2 |
|  6 | Aleksander | Ziemniak  |          2 |
+----+------------+-----------+------------+
6 rows in set (0,001 sec)

MariaDB [baza]> UPDATE pracownicy SET stanowisko = 4 WHERE stanowisko = 3;
Query OK, 1 row affected (0,001 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [baza]> SELECT * FROM pracownicy;
+----+------------+-----------+------------+
| id | imie       | nazwisko  | stanowisko |
+----+------------+-----------+------------+
|  1 | Jan        | Marchewka |          1 |
|  2 | Michał     | Talerz    |          1 |
|  3 | Marek      | Potrzeba  |          4 |
|  4 | Andrzej    | Gawron    |          4 |
|  5 | Zdzisław   | Szary     |          2 |
|  6 | Aleksander | Ziemniak  |          2 |
+----+------------+-----------+------------+
6 rows in set (0,001 sec)


```