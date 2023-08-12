<?php
$data_source_name = 'mysql:host=localhost;dbname=pilkarz';
$selected_position_id = match ($_POST['position']) {
    "goalkeepers" => 1,
    "defenders" => 2,
    "midfielders" => 3,
    "forwards" => 4,
    default => null
};

try {
    $database_handle = new PDO($data_source_name, 'marek', 'trzcinacukrowa');

    $get_players_sth = $database_handle->prepare('SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = :position_id');
    $get_players_sth->execute(['position_id' => $selected_position_id]);

    $players = $get_players_sth->fetchAll();

    $get_teams_query = 'SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC';
    $teams = $database_handle->query($get_teams_query)->fetchAll();

    $get_players_sth = null;
    $database_handle = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl2.css">
    <title>Piłka nożna</title>
</head>
<body>
    <header>
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </header>
    <section>
        <div class="section-left">
            <form method="post" action="liga.php">
                <label for="position-select">Wybierz</label>
                <select id="position-select" name="position">
                    <option value="goalkeepers">Bramkarze</option>
                    <option value="defenders">Obrońcy</option>
                    <option value="midfielders">Pomocnicy</option>
                    <option value="forwards">Napastnicy</option>
                </select>
                <button type="submit">Zobacz</button>
            </form>
            <img src="zad2.png" alt="piłka">
            <p>Autor: 00000000000</p>
        </div>
        <div class="section-right">
            <ol>
                <?php foreach ($players as $player): ?>
                    <li>
                        <p><?= $player['imie'].' '.$player['nazwisko'] ?></p>
                    </li>
                <?php endforeach ?>
            </ol>
        </div>
    </section>
    <main>
        <h3>Liga mistrzów</h3>
        <div class="teams">
            <?php foreach ($teams as $team): ?>
                <article>
                    <h2><?= $team['zespol'] ?></h2>
                    <h1><?= $team['punkty'] ?></h1>
                    <p><?= $team['grupa'] ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
