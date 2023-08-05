<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'dane');

$get_friends_query = 'SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN (1, 2, 6)';
$friends = $mysqli->query($get_friends_query)->fetch_all(MYSQLI_ASSOC);

$mysqli->close();

return $friends;