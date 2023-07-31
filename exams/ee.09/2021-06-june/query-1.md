```sql
SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30;
```

```console
MariaDB [dane4]> SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30;
+----+----------+-------------+---------------+------------+
| id | imie     | nazwisko    | rok_urodzenia | zdjecie    |
+----+----------+-------------+---------------+------------+
|  2 | Monika   | Kowalska    |          1976 | osoba1.jpg |
|  3 | Jan      | Kowalski    |          2002 | osoba5.jpg |
|  4 | Monika   | Nowak       |          1993 | osoba2.jpg |
|  5 | Anna     | Kowalska    |          2002 | osoba3.jpg |
|  6 | Grzegorz | Konieczny   |          1983 | osoba6.jpg |
|  7 | Monika   | Kopacz      |          2009 | osoba1.jpg |
|  8 | Rysiek   | Kowalski    |          1993 | osoba7.jpg |
|  9 | Ewa      | Krzak       |          2008 | osoba1.jpg |
| 10 | Roksana  | Rybnik      |          1995 | osoba3.jpg |
| 11 | Grzegorz | Roh         |          1983 | osoba6.jpg |
| 12 | Monika   | Kowalewska  |          1976 | osoba1.jpg |
| 13 | Jan      | Trzeciak    |          2006 | osoba5.jpg |
| 14 | Joanna   | Rysik       |          1993 | osoba2.jpg |
| 15 | Anna     | Kownacka    |          2003 | osoba3.jpg |
| 16 | Grzegorz | Konieczny   |          1983 | osoba6.jpg |
| 17 | Monika   | Lewandowska |          1967 | osoba4.jpg |
| 18 | Ernest   | Lubomirski  |          2004 | osoba8.jpg |
| 19 | Monika   | Nowak       |          1993 | osoba2.jpg |
| 20 | Anna     | Kowalska    |          2002 | osoba3.jpg |
| 21 | Grzegorz | Konieczny   |          1983 | osoba6.jpg |
| 22 | Monika   | Kowalska    |          1976 | osoba1.jpg |
| 23 | Jan      | Kowalski    |          2002 | osoba5.jpg |
| 24 | Monika   | Nowak       |          1993 | osoba2.jpg |
| 25 | Anna     | Kowalska    |          2002 | osoba3.jpg |
| 26 | Grzegorz | Konieczny   |          1983 | osoba6.jpg |
| 27 | Monika   | Kopacz      |          2009 | osoba1.jpg |
| 28 | Rysiek   | Kowalski    |          1993 | osoba7.jpg |
| 29 | Ewa      | Krzak       |          2008 | osoba1.jpg |
| 30 | Roksana  | Rybnik      |          1995 | osoba3.jpg |
| 31 | Grzegorz | Roh         |          1983 | osoba6.jpg |
+----+----------+-------------+---------------+------------+
30 rows in set (0,001 sec)

```