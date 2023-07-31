```sql
SELECT nazwa_kategorii, AVG(cena_brutto) FROM produkty NATURAL JOIN kategorie GROUP BY (nazwa_kategorii);
```

```console
MariaDB [sklep]> SELECT nazwa_kategorii, AVG(cena_brutto) FROM produkty NATURAL
JOIN kategorie GROUP BY (nazwa_kategorii);
+-----------------+------------------+
| nazwa_kategorii | AVG(cena_brutto) |
+-----------------+------------------+
| Dyski           |       376.666667 |
| Pamięci         |       602.375000 |
| Płyty_główne    |       365.000000 |
| Procesory       |       520.100006 |
+-----------------+------------------+
4 rows in set (0,001 sec)

```