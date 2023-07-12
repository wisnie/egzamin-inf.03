```sql
-- `styl_zycia = 1` oznacza ryby drapieżne (z treści).
SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;
```

```console
MariaDB [wedkowanie]> SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;
+----+----------+-----------------------+
| id | nazwa    | wystepowanie          |
+----+----------+-----------------------+
|  1 | Szczupak | stawy, rzeki          |
|  3 | Sandacz  | stawy, jeziora, rzeki |
|  4 | Okon     | rzeki                 |
|  5 | Sum      | jeziora, rzeki        |
|  6 | Dorsz    | morza, oceany         |
+----+----------+-----------------------+
5 rows in set (0.036 sec)

```
