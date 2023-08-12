```sql
SELECT z.id, nazwisko, p.nazwa AS 'pozycja' FROM zawodnik z, pozycja p WHERE (z.id IN (3,5)) AND (p.id = z.pozycja_id);
```

```console
MariaDB [pilkarz]> SELECT z.id, nazwisko, p.nazwa AS 'pozycja' FROM zawodnik z, pozycja p WHERE (z.id IN (3,5)) AND
 (p.id = z.pozycja_id);
+----+----------+----------+
| id | nazwisko | pozycja  |
+----+----------+----------+
|  3 | Bednarek | obronca  |
|  5 | Grosicki | pomocnik |
+----+----------+----------+
2 rows in set (0,001 sec)

```