```sql
UPDATE osoby SET opis = "Przyjaciel Marka" WHERE Hobby_id = 4;
```

```console
MariaDB [dane4]> UPDATE osoby SET opis = "Przyjaciel Marka" WHERE Hobby_id = 4;
Query OK, 1 row affected (0,002 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [dane4]> SELECT * FROM osoby WHERE Hobby_id = 4;
+----+----------+------+----------+---------------+------------------+------------+
| id | Hobby_id | imie | nazwisko | rok_urodzenia | opis             | zdjecie    |
+----+----------+------+----------+---------------+------------------+------------+
| 25 |        4 | Anna | Kowalska |          2002 | Przyjaciel Marka | osoba3.jpg |
+----+----------+------+----------+---------------+------------------+------------+
1 row in set (0,001 sec)


```