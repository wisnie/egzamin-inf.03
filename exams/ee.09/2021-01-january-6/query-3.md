```sql
SELECT nr_rejsu, linie FROM odloty o INNER JOIN samoloty s ON s.id = o.samoloty_id WHERE kierunek = 'Malta';
```

```console
MariaDB [egzamin]> SELECT nr_rejsu, linie FROM odloty o INNER JOIN samoloty s ON s.id = o.samoloty_id WHERE kierunek = 'Malta';
+----------+-------+
| nr_rejsu | linie |
+----------+-------+
| LX5673   | SWISS |
+----------+-------+
1 row in set (0,001 sec)

```