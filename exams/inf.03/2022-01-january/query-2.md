```sql
SELECT nazwa, cena FROM dania WHERE typ = 2;
```


```console
MariaDB [baza]> SELECT nazwa, cena FROM dania WHERE typ = 2;
+-------------------+------+
| nazwa             | cena |
+-------------------+------+
| Pierogi z mięsem  |   30 |
| Kotlet schabowy   |   20 |
| Kartacze          |   23 |
+-------------------+------+
3 rows in set (0,001 sec)

```