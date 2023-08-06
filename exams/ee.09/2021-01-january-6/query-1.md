```sql
SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;
```

```console
MariaDB [egzamin]> SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;
+----+----------+----------+-----------+------------------+
| id | nr_rejsu | czas     | kierunek  | status_lotu      |
+----+----------+----------+-----------+------------------+
|  9 | LH9331   | 10:22:00 | Monachium |                  |
|  8 | LH9888   | 10:19:00 | Hamburg   |                  |
|  7 | LH9821   | 10:16:00 | Berlin    |                  |
|  6 | LX5622   | 10:13:00 | Wieden    |                  |
|  5 | LX5673   | 10:06:00 | Malta     |                  |
|  4 | LX5647   | 10:03:00 | Londyn LT | odprawa          |
| 10 | W68769   | 09:56:00 | Zurych    | boarding         |
|  3 | W63425   | 09:45:00 | Warszawa  | odprawa          |
|  1 | FR1646   | 09:20:00 | Neapol    | wystartowal      |
|  2 | FR1327   | 09:10:00 | ALICANTE  | Opozniony 10 min |
+----+----------+----------+-----------+------------------+
10 rows in set (0,001 sec)

```