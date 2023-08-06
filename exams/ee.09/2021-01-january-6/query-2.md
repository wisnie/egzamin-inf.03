```sql
SELECT MIN(czas) FROM odloty WHERE czas BETWEEN '10:10:00' AND '10:19:00';
```

```console
MariaDB [egzamin]> SELECT MIN(czas) FROM odloty WHERE czas BETWEEN '10:10:00' AND '10:19:00';
+-----------+
| MIN(czas) |
+-----------+
| 10:13:00  |
+-----------+
1 row in set (0,001 sec)

```