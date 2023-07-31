```sql
SELECT id_zam, ilosc, wartosc, p.nazwa FROM zamowienia NATURAL JOIN produkty p WHERE id_klient = 2;
```

```console
MariaDB [sklep]> SELECT id_zam, ilosc, wartosc, p.nazwa FROM zamowienia NATURAL JOIN produkty p WHERE id_klient = 2;
+--------+-------+---------+-------------+
| id_zam | ilosc | wartosc | nazwa       |
+--------+-------+---------+-------------+
|      3 |     2 | 1360.40 | Corei5-7400 |
|      4 |     2 |  810.00 | Gigabyte    |
|     11 |     2 | 1620.00 | Patriot     |
+--------+-------+---------+-------------+
3 rows in set (0,001 sec)

```