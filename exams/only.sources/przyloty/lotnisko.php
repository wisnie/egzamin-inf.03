<?php
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'egzamin');

$flights_sql = 'SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC';
$flights = $mysqli->query($flights_sql)->fetch_all(MYSQLI_ASSOC);

$visited_recently = $_COOKIE['visited'];
if (empty($visited_recently)) {
    setcookie('visited', 'USER_VISITED_PAGE_RECENTLY', strtotime('+10 seconds'));
};

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Port Lotniczy</title>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="zad5.png" alt="logo lotnisko">
        </div>
        <div class="header-middle">
            <h1>Przyloty</h1>
        </div>
        <div class="header-right">
            <h3>przydatne linki</h3>
            <a target="_blank" download="" href="kwerendy.txt">Pobierz...</a>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flights as $fl) : ?>
                    <tr>
                        <td><?= $fl['czas'] ?></td>
                        <td><?= $fl['kierunek'] ?></td>
                        <td><?= $fl['nr_rejsu'] ?></td>
                        <td><?= $fl['status_lotu'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
    <footer>
        <div class="footer-left">
            <?php if (empty($visited_recently)) : ?>
                <p class='bold'>Dzień dobry Strona lotniska używa ciasteczek</p>
            <?php else : ?>
                <p class='italic'>Witaj ponownie na stronie lotniska</p>
            <?php endif ?>
        </div>
        <div class="footer-right">
            Autor: 00000000000
        </div>
    </footer>
</body>

</html>
