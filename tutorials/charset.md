# Zestaw znaków

Zestaw znaków (ang. Character encoding) to sposób na przypisanie określonej liczbie znaku, bądź symbolu. 
ASCII jest przykładem systemu kodowania znaków, korzystając z 7 bitów, możemy reprezentować 128 liter, symboli.

Wszystkie tabele w skryptach przeznaczonych do importu są kodowane w systemie `latin1`, znanym również pod nazwą `ISO 8859-1`.
Jest to dość nietypowy wybór, ponieważ nie pozwala on na reprezentację polskich znaków diakrytycznych. Obecnie normą stało się
używanie systemu `UTF-8`, który wykorzystuje od 1 do 4 bajtów do reprezentacji 1 znaku. Dane w tabelach są również

```console
MariaDB [(none)]> SELECT HEX('Okoń');
+--------------+
| HEX('Okoń')  |
+--------------+
| 4F6B6FC584   |
+--------------+
1 row in set (0,000 sec)

```