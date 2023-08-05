```sql
SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, h.nazwa FROM osoby, hobby h WHERE osoby.id = 10 AND h.id = Hobby_id;
```

Wersja z użyciem złączenia:

```sql
SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, h.nazwa FROM osoby INNER JOIN hobby h ON h.id = Hobby_id WHERE osoby.id = 10;
```

```console
MariaDB [dane4]> SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, h.nazwa FROM osoby, hobby h WHERE osoby.id = 10 AND h.id = Hobby_id;
+---------+----------+---------------+------------+------------+-------+
| imie    | nazwisko | rok_urodzenia | opis       | zdjecie    | nazwa |
+---------+----------+---------------+------------+------------+-------+
| Roksana | Rybnik   |          1995 | pozdrawiam | osoba3.jpg | biegi |
+---------+----------+---------------+------------+------------+-------+
1 row in set (0,001 sec)

```