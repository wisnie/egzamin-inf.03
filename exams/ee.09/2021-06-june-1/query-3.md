```sql
SELECT id, zdjecie FROM osoby WHERE imie = 'Monika' LIMIT 5;
```

```console
MariaDB [dane]> SELECT id, zdjecie FROM osoby WHERE imie = 'Monika' LIMIT 5;
+----+------------+
| id | zdjecie    |
+----+------------+
|  2 | osoba1.jpg |
|  4 | osoba2.jpg |
|  7 | osoba1.jpg |
| 12 | osoba1.jpg |
| 17 | osoba4.jpg |
+----+------------+
5 rows in set (0,001 sec)

```