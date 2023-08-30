<?php
$host = '127.0.0.1';
$db   = 'wedkowanie';
$user = 'marek';
$pass = 'trzcinacukrowa';
$charset = 'utf8mb4';

$database_source = "mysql:host=$host;dbname=$db;charset=$charset";
$connection_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($database_source, $user, $pass, $connection_options);

$river_fishes_sql = "SELECT nazwa, akwen, wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE rodzaj = 3";
$predatory_fishes_sql = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";

$river_fishes =  $pdo->query($river_fishes_sql)->fetchAll();
$predatory_fishes  = $pdo->query($predatory_fishes_sql)->fetchAll();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <link href="styl_1.css" rel="stylesheet">
        <title>Wędkowanie</title>
    </head>
    <body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <section class="left-container">
            <article class="left-block">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                    <?php foreach ($river_fishes as $r_fish) { ?>
                    <li><?= $r_fish["nazwa"]." pływa w rzece ".$r_fish["akwen"].", ".$r_fish["wojewodztwo"] ?></li>
                    <?php } ?>
                </ol>
            </article>
            <article class="left-block">
                <h3>Ryby drapieżne naszych wód</h3>
                <table>
                    <tr>
                        <th>L.p.</th>
                        <th>Gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                    <?php foreach ($predatory_fishes as $p_fish) { ?>
                        <tr>
                            <td><?= $p_fish["id"] ?></td>
                            <td><?= $p_fish["nazwa"] ?></td>
                            <td><?= $p_fish["wystepowanie"] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </article>
        </section>
        <section class="right-block">
            <img height="320" width="400" src="ryba1.jpg" alt="Sum">
            <a href="kwerendy.txt" download="">Pobierz kwerendy</a>
        </section>
    </main>
    <footer>
        Stronę wykonał: 00000000000
    </footer>
    </body>
</html>
