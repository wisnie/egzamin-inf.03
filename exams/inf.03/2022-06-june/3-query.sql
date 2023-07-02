```sql
-- rodzaj = 3 oznacza łowiska, które są rzekami (z polecenia).
SELECT nazwa, akwen, wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE rodzaj = 3;
```

MariaDB [wedkowanie]> SELECT nazwa, akwen, wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE rodzaj = 3;
+----------+-------------------------+---------------+
| nazwa    | akwen                   | wojewodztwo   |
+----------+-------------------------+---------------+
| Szczupak | Warta-Obrzycko          | Wielkopolskie |
| Leszcz   | Przemsza k. Okradzinowa | Slaskie       |
+----------+-------------------------+---------------+
2 rows in set (0.028 sec)


