```sql
SELECT imie, nazwisko, miasto FROM klient WHERE miasto in ('Legionowo', 'Warszawa');
```

```console
MariaDB [sklep]> SELECT imie, nazwisko, miasto FROM klient WHERE miasto in ('Legionowo', 'Warszawa');
+--------+-----------+-----------+
| imie   | nazwisko  | miasto    |
+--------+-----------+-----------+
| Piotr  | Górski    | Legionowo |
| Adam   | Binder    | Warszawa  |
| Robert | Halicki   | Warszawa  |
| Alicja | Warkowska | Legionowo |
+--------+-----------+-----------+
4 rows in set (0,001 sec)

```