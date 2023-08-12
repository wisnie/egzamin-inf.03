```sql
SELECT nazwa FROM dania WHERE (typ = 3) AND (cena < 15);
```

```console
MariaDB [baza]> SELECT nazwa FROM dania WHERE (typ = 3) AND (cena < 15);
+-----------------+
| nazwa           |
+-----------------+
| Frytki          |
| Tosty z szynką  |
| Tosty z serem   |
+-----------------+
3 rows in set (0,001 sec)

```