<?php
// Zmienne środowiskowe są normalnie wczytywane przez środowisko uruchomieniowe.
// Przykład ma charakter edukacyjny, wczytuję je w tym miejscu.
putenv("host=localhost");
putenv("dbname=wedkowanie");
putenv("user=marek");
putenv("pass=trzcinacukrowa");

try {
    // Instancja połączenia z bazą danych, po zakończeniu wykonywanych operacji
    // należy ustawić ją na null.
    $database_source = "mysql:host=" . getenv("host") . ";dbname=" . getenv("dbname");
    $database_handle = new PDO($database_source, getenv("user"), getenv("pass"));

    $get_river_fishes_query = "SELECT nazwa, akwen, wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE rodzaj = 3";
    $get_predatory_fishes_query = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";

    // Metoda `query` zwraca instancję wyrażenia (Statement handle). Metoda `fetchAll`
    // zwraca tablicę asocjacyjną z danymi. Możemy iterować po `Statement handle`, ale
    // w takim wypadku konieczne byłoby zamknięcie połączenia po wyświetleniu danych.
    $river_fishes =  $database_handle->query($get_river_fishes_query)->fetchAll();
    $predatory_fishes  = $database_handle->query($get_predatory_fishes_query)->fetchAll();

    $database_handle = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
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
