<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'egzamin');

$get_departures_query = 'SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC';
$departures = $mysqli->query($get_departures_query)->fetch_all(MYSQLI_ASSOC);

$mysqli->close();

$announcement_tag = match (isset($_COOKIE['has_visited_recently'])) {
    false => '<p class="italic">Dzień dobry! Sprawdź regulamin naszej strony</p>',
    true => '<p class="bold">Miło nam, że nas znowu odwiedziłeś</p>'
};

if (!isset($_COOKIE['has_visited_recently'])) {
    setcookie('has_visited_recently', true, strtotime('+1 hour'));
};
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl6.css">
    <title>Odloty samolotów</title>
</head>
<body>
    <header>
        <h2>Odloty z lotniska</h2>
        <img src="zad6.png" alt="logotyp">
    </header>
    <main>
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            <?php foreach ($departures as $dp): ?>
                <tr>
                    <td><?= $dp['id'] ?></td>
                    <td><?= $dp['nr_rejsu'] ?></td>
                    <td><?= $dp['czas'] ?></td>
                    <td><?= $dp['kierunek'] ?></td>
                    <td><?= $dp['status_lotu'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </main>
    <footer>
        <a target="_blank" href="kw1.jpg">Pobierz obraz</a>
        <?= $announcement_tag ?>
        <span>Autor: 00000000000</span>
    </footer>
</body>
</html>
