> Wymiar ochronny – określona przepisami długość złowionej ryby,
  poniżej której musi być z powrotem wypuszczona do wody. Długość ryby
  liczona jest od początku pyska do końca płetwy ogonowej.

https://pl.wikipedia.org/wiki/Wymiar_ochronny

```sql
SELECT Ryby_id, wymiar_ochronny FROM okres_ochronny WHERE wymiar_ochronny < 30;
```

```console
MariaDB [wedkowanie]> SELECT Ryby_id, wymiar_ochronny FROM okres_ochronny WHERE wymiar_ochronny < 30;
+---------+-----------------+
| Ryby_id | wymiar_ochronny |
+---------+-----------------+
|       4 |              15 |
|       6 |               0 |
|       7 |               0 |
|       8 |              25 |
+---------+-----------------+
4 rows in set (0.002 sec)

```
