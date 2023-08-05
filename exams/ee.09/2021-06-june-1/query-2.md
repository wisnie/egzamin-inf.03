```sql
SELECT o.id, o.nazwisko, h.nazwa FROM osoby o INNER JOIN hobby h ON h.id = Hobby_id WHERE rok_urodzenia > 2000;
```

```console
MariaDB [dane]> SELECT o.id, o.nazwisko, h.nazwa FROM osoby o INNER JOIN hobby h ON h.id = Hobby_id WHERE rok_urodz
enia > 2000;
+----+------------+-------------+
| id | nazwisko   | nazwa       |
+----+------------+-------------+
|  3 | Kowalski   | biegi       |
|  5 | Kowalska   | turystyka   |
|  7 | Kopacz     | biegi       |
|  9 | Krzak      | biologia    |
| 13 | Trzeciak   | modelarstwo |
| 15 | Kownacka   | samochody   |
| 18 | Lubomirski | biegi       |
| 20 | Kowalska   | komputery   |
| 23 | Kowalski   | biegi       |
| 25 | Kowalska   | gimnastyka  |
| 27 | Kopacz     | komputery   |
| 29 | Krzak      | kryminaly   |
| 33 | Trzeciak   | biologia    |
| 35 | Kownacka   | numizmatyka |
| 38 | Lubomirski | biegi       |
| 40 | Kowalska   | komputery   |
+----+------------+-------------+
16 rows in set (0,001 sec)

```