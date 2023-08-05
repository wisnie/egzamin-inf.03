```sql
SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18, 22, 23, 25);
```

```console
MariaDB [dane3]> SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18, 22, 23, 25);
+----+----------------+------------------------------------------------------------------------------+--------------------+
| id | nazwa          | opis                                                                         | zdjecie            |
+----+----------------+------------------------------------------------------------------------------+--------------------+
| 18 | Alien4         | Zaloga statku Nostromo odbiera tajemniczy sygnal i laduje na planetoidzie... | alien.jpg          |
| 22 | Koralowa wyspa | Hamprey Bogart w jednej ze swoich wielkich rol.                              | koralowa_wyspa.jpg |
| 23 | krokodyl       | Gigantyczny krokodyl atakuje pewne miasto.                                   | krokodyl.jpg       |
| 25 | SteamPunk      | Wizja postapokaliptycznej planety                                            | steampunk.jpg      |
+----+----------------+------------------------------------------------------------------------------+--------------------+
4 rows in set (0,001 sec)

```