```sql
SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN (1, 2, 6);
```

```console
MariaDB [dane]> SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN (1, 2, 6);
+----------+-------------+--------------------------------+------------+
| imie     | nazwisko    | opis                           | zdjecie    |
+----------+-------------+--------------------------------+------------+
| Monika   | Kowalska    | Z checia Ciebie poznam         | osoba1.jpg |
| Grzegorz | Konieczny   | Polecam nowy procesor XS756FFT | osoba6.jpg |
| Grzegorz | Konieczny   | Polecam nowy procesor XS756FFT | osoba6.jpg |
| Monika   | Lewandowska | slucham Rocka                  | osoba4.jpg |
| Monika   | Nowak       | ello                           | osoba2.jpg |
| Anna     | Kowalska    | Rzym jest cudny!               | osoba3.jpg |
| Grzegorz | Konieczny   | Polecam nowy procesor XS756FFT | osoba6.jpg |
| Monika   | Kowalska    | Z checia Ciebie poznam         | osoba1.jpg |
| Monika   | Kopacz      | dzis rano 5 km                 | osoba1.jpg |
| Monika   | Lewandowska | slucham Rocka                  | osoba4.jpg |
| Monika   | Nowak       | ello                           | osoba2.jpg |
| Anna     | Kowalska    | Rzym jest cudny!               | osoba3.jpg |
| Grzegorz | Konieczny   | Polecam nowy procesor XS756FFT | osoba6.jpg |
+----------+-------------+--------------------------------+------------+
13 rows in set (0,001 sec)

```