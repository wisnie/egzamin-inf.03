<?php
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect('localhost', 'marek', 'trzcinacukrowa', 'dane2');

if (isset($_POST['product-name']) && isset($_POST['product-price'])) {
    // Zagnieżdżone zapytania SELECT zostały zamienione na wartości (uproszczenie przykładu).
    $add_product_stmt = mysqli_prepare($mysqli, "INSERT INTO produkty VALUES (NULL, 1, 4, ?, 10, NULL, ?, 'owoce.jpg')");
    mysqli_stmt_bind_param($add_product_stmt, 'sd', $_POST['product-name'], $_POST['product-price']);
    mysqli_stmt_execute($add_product_stmt);
}

$get_vegetables_query = 'SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1,2)';
$vegetables = mysqli_fetch_all(mysqli_query($mysqli, $get_vegetables_query), MYSQLI_ASSOC);

mysqli_close($mysqli);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl2.css">
    <title>Warzywniak</title>
</head>
<body>
    <header>
        <h1>Internetowy sklep z eko-warzywami</h1>
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a target="_blank" href="https://terapiasokami.pl/">soki</a></li>
        </ol>
    </header>
    <main>
        <?php foreach ($vegetables as $vege): ?>
            <article>
                <img width="300" height="200" src="<?= $vege['zdjecie'] ?>" alt="warzywniak">
                <h5><?= $vege['nazwa'] ?></h5>
                <p><?= 'opis: '.$vege['opis'] ?></p>
                <p><?= 'na stanie:'.$vege['ilosc'] ?></p>
                <!-- Pozwolę sobie nie skomentować użycia nagłówka do wyświetlenia ceny -->
                <h2><?= $vege['cena'].' zł' ?></h2>
            </article>
        <?php endforeach ?>
    </main>
    <footer>
        <form method="post" action="sklep.php">
            <label>
                Nazwa:
                <input required type="text" name="product-name">
            </label>
            <label>
                Cena:
                <input required type="number" step="0.01" name="product-price">
            </label>
            <button type="submit">Dodaj produkt</button>
        </form>
        <span>Stronę wykonał: 00000000000</span>
    </footer>
</body>
</html>
