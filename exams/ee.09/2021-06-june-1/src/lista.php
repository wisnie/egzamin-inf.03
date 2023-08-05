<?php
$friends = require 'data.php';
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl.css">
    <title>Lista przyjaciół</title>
</head>
<body>
    <header>
        <h1>Portal społecznościowy — moje konto</h1>
    </header>
    <main>
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php foreach ($friends as $friend): ?>
            <article>
                <img src="<?=$friend['zdjecie'] ?>" alt="przyjaciel">
                <div>
                    <h3><?= $friend['imie'].' '.$friend['nazwisko'] ?></h3>
                    <p><?= 'Ostatni wpis: '. $friend['opis'] ?></p>
                </div>
            </article>
        <?php endforeach ?>
    </main>
    <footer>
        <span>Stronę wykonał 00000000000</span>
        <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </footer>
</body>
</html>
