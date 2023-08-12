```sql
DELETE FROM rozgrywka;
```

```console
MariaDB [pilkarz]> SELECT * FROM rozgrywka;
+----+---------+---------+-------+----------------+
| id | zespol1 | zespol2 | wynik | data_rozgrywki |
+----+---------+---------+-------+----------------+
|  1 | EVG     | FCB     | 3:1   | 2019-05-14     |
|  2 | EVG     | FCB     | 2:3   | 2019-05-20     |
|  3 | RM      | FCB     | 2:2   | 2019-05-11     |
|  4 | JUV     | ARS     | 3:1   | 2019-05-12     |
|  5 | JUV     | FCB     | 2:3   | 2019-05-17     |
|  6 | EVG     | JUV     | 3:0   | 2019-05-13     |
|  7 | RM      | JUV     | 2:2   | 2019-05-15     |
|  8 | EVG     | RM      | 2:0   | 2019-05-16     |
|  9 | EVG     | FCB     | 1:1   | 2019-05-22     |
+----+---------+---------+-------+----------------+
9 rows in set (0,001 sec)

MariaDB [pilkarz]> DELETE FROM rozgrywka;
Query OK, 9 rows affected (0,001 sec)

MariaDB [pilkarz]> SELECT * FROM rozgrywka;
Empty set (0,000 sec)

```