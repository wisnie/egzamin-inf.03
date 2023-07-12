```sql
-- TINYINT UNSIGNED oznacza liczbę 8 bitową bez znaku (0-255).
ALTER TABLE ryby ADD dobowy_limit TINYINT UNSIGNED;
```

```console
MariaDB [wedkowanie]> ALTER TABLE ryby ADD dobowy_limit TINYINT UNSIGNED;
Query OK, 0 rows affected (0.103 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [wedkowanie]> DESCRIBE ryby;
+--------------+---------------------+------+-----+---------+----------------+
| Field        | Type                | Null | Key | Default | Extra          |
+--------------+---------------------+------+-----+---------+----------------+
| id           | int(10) unsigned    | NO   | PRI | NULL    | auto_increment |
| nazwa        | text                | YES  |     | NULL    |                |
| wystepowanie | text                | YES  |     | NULL    |                |
| styl_zycia   | int(11)             | YES  |     | NULL    |                |
| dobowy_limit | tinyint(3) unsigned | YES  |     | NULL    |                |
+--------------+---------------------+------+-----+---------+----------------+
5 rows in set (0.007 sec)

```

```console
MariaDB [wedkowanie]> SELECT * FROM ryby;
+----+----------+-----------------------+------------+--------------+
| id | nazwa    | wystepowanie          | styl_zycia | dobowy_limit |
+----+----------+-----------------------+------------+--------------+
|  1 | Szczupak | stawy, rzeki          |          1 |         NULL |
|  2 | Karp     | stawy, jeziora        |          2 |         NULL |
|  3 | Sandacz  | stawy, jeziora, rzeki |          1 |         NULL |
|  4 | Okon     | rzeki                 |          1 |         NULL |
|  5 | Sum      | jeziora, rzeki        |          1 |         NULL |
|  6 | Dorsz    | morza, oceany         |          1 |         NULL |
|  7 | Leszcz   | jeziora               |          2 |         NULL |
|  8 | Lin      | jeziora               |          2 |         NULL |
+----+----------+-----------------------+------------+--------------+
8 rows in set (0.001 sec)

MariaDB [wedkowanie]> UPDATE ryby SET dobowy_limit = 20 WHERE id = 2;
Query OK, 1 row affected (0.040 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [wedkowanie]> UPDATE ryby SET dobowy_limit = 300 WHERE id = 4;
ERROR 1264 (22003): Out of range value for column 'dobowy_limit' at row 1
MariaDB [wedkowanie]> UPDATE ryby SET dobowy_limit = -72 WHERE id = 5;
ERROR 1264 (22003): Out of range value for column 'dobowy_limit' at row 1
MariaDB [wedkowanie]> SELECT * FROM ryby;
+----+----------+-----------------------+------------+--------------+
| id | nazwa    | wystepowanie          | styl_zycia | dobowy_limit |
+----+----------+-----------------------+------------+--------------+
|  1 | Szczupak | stawy, rzeki          |          1 |         NULL |
|  2 | Karp     | stawy, jeziora        |          2 |           20 |
|  3 | Sandacz  | stawy, jeziora, rzeki |          1 |         NULL |
|  4 | Okon     | rzeki                 |          1 |         NULL |
|  5 | Sum      | jeziora, rzeki        |          1 |         NULL |
|  6 | Dorsz    | morza, oceany         |          1 |         NULL |
|  7 | Leszcz   | jeziora               |          2 |         NULL |
|  8 | Lin      | jeziora               |          2 |         NULL |
+----+----------+-----------------------+------------+--------------+
8 rows in set (0.001 sec)

```
