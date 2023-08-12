```sql
SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = 4;
```

```console
MariaDB [pilkarz]> SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = 4;
+-----------+----------+
| imie      | nazwisko |
+-----------+----------+
| Arkadiusz | Milik    |
| Adam      | Buksa    |
+-----------+----------+
2 rows in set (0,001 sec)

```