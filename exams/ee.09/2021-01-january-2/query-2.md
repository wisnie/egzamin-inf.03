```sql
SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC;
```

```console
MariaDB [pilkarz]> SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC;
+--------+--------+-------+
| zespol | punkty | grupa |
+--------+--------+-------+
| EVG    |     34 | A     |
| ARS    |     24 | C     |
| FCB    |     21 | A     |
| CHL    |     17 | C     |
| JUV    |     13 | B     |
| RM     |      5 | B     |
+--------+--------+-------+
6 rows in set (0,001 sec)

```