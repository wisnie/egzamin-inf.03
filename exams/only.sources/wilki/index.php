<?php
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'drapiezniki');
$mysqli->set_charset('utf8');

$animals_sql = 'SELECT gatunek, rodzaj FROM zwierzeta z JOIN odzywianie o ON o.id = z.Odzywianie_id';
$animals = $mysqli->query($animals_sql)->fetch_all(MYSQLI_ASSOC);

$selected_group = $_GET['animal-type'];
if (!empty($selected_group)) {
    $get_animals_sql = 'SELECT gatunek, wystepowanie FROM zwierzeta z JOIN odzywianie o ON o.id = z.Odzywianie_id WHERE rodzaj = ?';
    $get_animals = $mysqli->prepare($get_animals_sql);
    $get_animals->bind_param('s', $selected_group);
    $get_animals->execute();
    $featured_animals = $get_animals->get_result()->fetch_all(MYSQLI_ASSOC);
};

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Odżywianie zwierząt</title>
</head>

<body>
    <header>
        <h2>DRAPIEŻNIKI I INNE</h2>
    </header>
    <form method="GET" action="index.php">
        <h3>Wybierz styl życia</h3>
        <select name="animal-type" id="animal-type-select">
            <option value="drapieznik">Drapieżniki</option>
            <option value="roslinozerny">Roślinożerne</option>
            <option value="padlinozerny">Padlinożerne</option>
            <option value="wszystkozerny">Wszystkożerne</option>
        </select>
        <button type="submit">Zobacz</button>
    </form>
    <main>
        <div class="main-list">
            <h3>Lista zwierząt</h3>
            <ul>
                <?php foreach ($animals as $an) : ?>
                    <li>
                        <?= $an['gatunek'] . ' -> ' . $an['rodzaj'] ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="main-animals">
            <?php if (isset($featured_animals)) : ?>
                <h3>Drapieżniki</h3>
                <ol>
                    <?php foreach ($featured_animals as $f_an) : ?>
                        <li>
                            <?= $f_an['gatunek'] . ', ' . $f_an['wystepowanie'] ?>
                        </li>
                    <?php endforeach ?>
                </ol>
            <?php endif ?>
        </div>
        <div class="main-photo">
            <img src="drapieznik.jpg" alt="Wilki">
        </div>
    </main>
    <footer>
        <a target="_blank" href="http://pl.wikipedia.org">Poczytaj o zwierzętach na Wikipedii</a>
        <span>autor strony: 00000000000</span>
    </footer>
</body>

</html>
