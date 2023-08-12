<?php
if (isset($_POST['reservation-date']) && isset($_POST['people-count']) && isset($_POST['phone-number'])) {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'baza');

    // Czy wszędzie używam fsd-fsd-fsd case, czy może fsd_fsd_fsd?
    $add_reservation_stmt = $mysqli->prepare('INSERT INTO rezerwacje VALUES (NULL, 1, ?, ?, ?)');
    $add_reservation_stmt->bind_param('sis', $_POST['reservation-date'], $_POST['people-count'], $_POST['phone-number']);
    $add_reservation_stmt->execute();

    // Dla uproszczenia bez obsługi błędów.

    $mysqli->close();
    echo 'Dodano rezerwację do bazy';
}
