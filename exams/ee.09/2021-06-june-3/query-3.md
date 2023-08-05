```sql
SELECT p.nazwa, r.nazwa AS 'gatunek' FROM produkty p INNER JOIN rodzaje r ON r.id = Rodzaje_id WHERE opis LIKE '%Leia%';
```

```console
MariaDB [dane3]> SELECT p.nazwa, r.nazwa AS 'gatunek' FROM produkty p INNER JOIN rodzaje r ON r.id = Rodzaje_id WHERE opis LIKE '%Leia%';
+-------------+--------------+
| nazwa       | gatunek      |
+-------------+--------------+
| Star Wars 1 | fantastyczne |
| Star Wars 2 | fantastyczne |
| Star Wars 3 | fantastyczne |
| Star Wars 4 | fantastyczne |
+-------------+--------------+
4 rows in set (0,001 sec)

```