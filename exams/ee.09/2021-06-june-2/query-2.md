```sql
 SELECT produkty.nazwa AS 'Nazwa produktu', producenci.nazwa AS 'Nazwa producenta' FROM produkty INNER JOIN producenci ON producenci.id = produkty.Producenci_id  WHERE (ilosc < 10) AND (Rodzaje_id = 1);
 ```

```console
MariaDB [dane2]> SELECT produkty.nazwa AS 'Nazwa produktu', producenci.nazwa AS 'Nazwa producenta' FROM produkty INNER JOIN producenci ON producenci.id = produkty.Producenci_id  WHERE (ilosc < 10) AND (Rodzaje_id = 1);
+----------------+------------------+
| Nazwa produktu | Nazwa producenta |
+----------------+------------------+
| arbuz          | FruitFarm        |
| papaja         | Owoce-rolnik     |
+----------------+------------------+
2 rows in set (0,001 sec)

```