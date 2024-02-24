<?php
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'baza');

$locations_sql = 'SELECT z.id, gatunek, Gromady_id, wystepowanie, g.nazwa AS "nazwa_gromady" FROM zwierzeta z JOIN gromady g ON g.id = z.Gromady_id WHERE Gromady_id IN (4,5)';
$locations = $mysqli->query($locations_sql)->fetch_all(MYSQLI_ASSOC);

$birds_sql = 'SELECT gatunek, obraz FROM zwierzeta WHERE Gromady_id = 4';
$birds = $mysqli->query($birds_sql)->fetch_all(MYSQLI_ASSOC);

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style12.css">
    <title>Gromady kręgowców</title>
</head>

<body>
    <header>
        <nav class="header-menu">
            <a href="gromada-ryby.html">gromada ryb</a>
            <a href="gromada-ptaki.html">gromada ptaków</a>
            <a href="gromada-ssaki.html">gromada ssaków</a>
        </nav>
        <div class="header-logo">
            <h2>GROMADY KRĘGOWCÓW</h2>
        </div>
    </header>
    <main>
        <section class="main-left">
            <?php foreach ($locations as $loc) : ?>
                <p><?= $loc['id'] ?>. <?= $loc['gatunek'] ?></p>
                <p>Występowanie: <?= $loc['wystepowanie'] ?>, gromada <?= $loc['nazwa_gromady'] ?></p>
                <hr>
            <?php endforeach ?>
        </section>
        <section class="main-right">
            <h1>PTAKI</h1>
            <ol>
                <?php foreach ($birds as $bird) : ?>
                    <li>
                        <a href="<?= $bird['obraz'] ?>"><?= $bird['gatunek'] ?></a>
                    </li>
                <?php endforeach ?>
            </ol>
            <img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki">
        </section>
    </main>
    <footer>
        Stronę o kręgowcach przygotował: 00000000000
    </footer>
</body>

</html>
