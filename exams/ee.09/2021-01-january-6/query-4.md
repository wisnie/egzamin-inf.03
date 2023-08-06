```sql
UPDATE przyloty SET status_lotu = 'planowy' WHERE nr_rejsu = 'LH9829';
```

```console
MariaDB [egzamin]> UPDATE przyloty SET status_lotu = 'planowy' WHERE nr_rejsu = 'LH9829';
Query OK, 1 row affected (0,001 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [egzamin]> SELECT * FROM przyloty;
+----+-------------+----------+-----------+----------+------------+-------------------+
| id | samoloty_id | nr_rejsu | kierunek  | czas     | dzien      | status_lotu       |
+----+-------------+----------+-----------+----------+------------+-------------------+
|  1 |           2 | W63454   | Warszawa  | 09:45:00 | 2019-07-29 | wyladowal         |
|  2 |           3 | LX3447   | Londyn LT | 10:03:00 | 2019-07-29 | opoznienie 10 min |
|  3 |           3 | LX5473   | Malta     | 10:06:00 | 2019-07-29 | planowy           |
|  4 |           3 | LX5728   | Wieden    | 10:13:00 | 2019-07-29 |                   |
|  5 |           4 | LH9829   | Berlin    | 10:16:00 | 2019-07-29 | planowy           |
|  6 |           4 | LH9898   | Hamburg   | 10:19:00 | 2019-07-29 |                   |
|  7 |           4 | LH3331   | Monachium | 10:22:00 | 2019-07-29 |                   |
|  8 |           2 | W68546   | Zurych    | 10:33:00 | 2019-07-29 |                   |
+----+-------------+----------+-----------+----------+------------+-------------------+
8 rows in set (0,001 sec)

```