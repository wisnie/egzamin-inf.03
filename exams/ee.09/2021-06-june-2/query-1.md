```sql
SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1,2);
```

```console
MariaDB [dane2]> SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1,2);
+----------+-------+----------+-------+--------------+
| nazwa    | ilosc | opis     | cena  | zdjecie      |
+----------+-------+----------+-------+--------------+
| gruszka  |    20 | Klaps    |  2.56 | gruszka.jpg  |
| morela   |    30 |          |  5.78 | morela.jpg   |
| arbuz    |     2 | czerwony |  2.56 | arbuz.jpg    |
| papaja   |     5 |          |  6.99 | papaja.jpg   |
| marchew  |   100 |          |  1.56 | marchew.jpg  |
| ziemniak |   120 | irys     |  3.33 | ziemniak.jpg |
| koper    |     2 | natka    |  1.56 | koper.jpg    |
| papryka  |    50 | zielona  | 10.99 | papryka.jpg  |
+----------+-------+----------+-------+--------------+
8 rows in set (0,001 sec)

```