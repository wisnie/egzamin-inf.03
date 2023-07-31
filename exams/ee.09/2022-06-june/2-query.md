```sql
SELECT nazwa FROM produkty WHERE cena_brutto < 500;
```

```console
MariaDB [sklep]> SELECT nazwa FROM produkty WHERE cena_brutto < 500;
+-------------+
| nazwa       |
+-------------+
| Ryzen3-1200 |
| Asus PRIME  |
| Gigabyte    |
| Corsair     |
| Goodram SSD |
| Samsung SSD |
+-------------+
6 rows in set (0,001 sec)

```