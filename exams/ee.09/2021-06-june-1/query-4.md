```sql
CREATE TABLE wpisy (id INT UNSIGNED AUTO_INCREMENT, wpis TEXT, uzytkownik_id INT UNSIGNED NOT NULL, PRIMARY KEY (id), FOREIGN KEY (uzytkownik_id) REFERENCES osoby (id));
```

```console
MariaDB [dane]> CREATE TABLE wpisy (id INT UNSIGNED AUTO_INCREMENT, wpis TEXT, uzytkownik_id INT UNSIGNED NOT NULL, PRIMARY KEY (id), FOREIGN KEY (uzytkownik_id) REFERENCES osoby (id));
Query OK, 0 rows affected (0,007 sec)

MariaDB [dane]> DESCRIBE wpisy;
+---------------+------------------+------+-----+---------+----------------+
| Field         | Type             | Null | Key | Default | Extra          |
+---------------+------------------+------+-----+---------+----------------+
| id            | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| wpis          | text             | YES  |     | NULL    |                |
| uzytkownik_id | int(10) unsigned | NO   | MUL | NULL    |                |
+---------------+------------------+------+-----+---------+----------------+
3 rows in set (0,002 sec)

```