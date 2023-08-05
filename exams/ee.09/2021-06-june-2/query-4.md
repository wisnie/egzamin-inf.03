```sql
INSERT INTO produkty VALUES (NULL, (SELECT id FROM rodzaje WHERE nazwa = 'owoce'), (SELECT id FROM producenci WHERE nazwa = 'warzywa-rolnik'), 'owoc1', 10, NULL, 9.99, 'owoce.jpg');
```

```console
MariaDB [dane2]> INSERT INTO produkty VALUES (NULL, (SELECT id FROM rodzaje WHERE nazwa = 'owoce'), (SELECT id FROM producenci WHERE nazwa = 'warzywa-rolnik'), 'owoc1', 10, NULL, 9.99, 'owoce.jpg');
Query OK, 1 row affected (0,002 sec)

```