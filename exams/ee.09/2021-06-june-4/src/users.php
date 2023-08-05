<?php
// Ustawienie tych flag sprawi, że wszystkie błędy podczas wykonywania
// operacji na BD zostaną przekazane do PHP.
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "marek", "trzcinacukrowa", "dane4");

$get_people_query = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30";
$people = $mysqli->query($get_people_query)->fetch_all(MYSQLI_ASSOC);

$get_person_statement = $mysqli->prepare("SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, h.nazwa FROM osoby, hobby h WHERE osoby.id = ? AND h.id = Hobby_id");
if (isset($_POST['person-id'])):
    $get_person_statement->bind_param("i", $_POST['person-id']);
    $get_person_statement->execute();
    $active_person = $get_person_statement->get_result()->fetch_assoc();
endif;

$mysqli->close();
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl4.css">
    <title>Panel administratora</title>
</head>
<body>
    <header>
        <h3>Portal Społecznościowy — panel administratora</h3>
    </header>
    <main>
        <section>
            <h4>Użytkownicy</h4>
            <?php
            $year = date("Y");
            foreach ($people as $person): ?>
                <span><?= $person["id"].". ".$person["imie"]." ".$person["nazwisko"].", ".($year - $person['rok_urodzenia'])." lat" ?></span>
            <?php endforeach ?>
            <a href="settings.html">Inne ustawienia</a>
        </section>
        <section>
            <h4>Podaj id użytkownika</h4>
            <form method="post" action="users.php">
                <input required name="person-id" type="number">
                <button type="submit">ZOBACZ</button>
                <hr>
                <?php if (isset($active_person)): ?>
                    <h2><?= $active_person['id']." ".$active_person["imie"]." ".$active_person["nazwisko"] ?></h2>
                    <img src="<?= $active_person["zdjecie"]?>" alt="<?= $active_person["id"]?>">
                    <p>Rok urodzenia: <?= $active_person["rok_urodzenia"]?></p>
                    <p>Opis: <?= $active_person["opis"]?></p>
                    <p>Hobby: <?= $active_person["nazwa"]?></p>
                <?php endif ?>
            </form>
        </section>
    </main>
    <footer>
        Stronę wykonał 00000000000
    </footer>
</body>
</html>