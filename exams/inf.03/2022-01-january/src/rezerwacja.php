<?php
// Zamiast tego można także ustawić odpowiednie atrybuty w dbms.
$reservation_date = $_POST['reservation-date'] ?? null;
$people_count = $_POST['people-count'] ?? null;
$phone_number = $_POST['phone-number'] ?? null;

$reservation_data_present = $reservation_date && $people_count && $phone_number;
if ($reservation_data_present) {
    // Większość z tych wartości może być domyślna.
    $host = '127.0.0.1';
    $port = 3306;
    $dbname = 'baza';
    $user = 'marek';
    $pass = 'trzcinacukrowa';
    $charset = 'utf8mb4';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli($host, $user, $pass, $dbname, $port);
    $mysqli->set_charset($charset);
    $mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);

    $add_reservation_stmt = $mysqli->prepare('INSERT INTO rezerwacje VALUES (NULL, 1, ?, ?, ?)');
    $add_reservation_stmt->bind_param('sis', $reservation_date, $people_count, $phone_number);
    $add_reservation_stmt->execute();

    $mysqli->close();

    echo 'Dodano rezerwację do bazy';
}
