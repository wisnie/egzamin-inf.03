<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "marek", "trzcinacukrowa", "dane3");

if (isset($_POST['delete-movie-id'])) {
    $delete_movie_stmt = $mysqli->prepare("DELETE FROM produkty WHERE id = ?");
    $delete_movie_stmt->bind_param('i', $_POST['delete-movie-id']);
    $delete_movie_stmt->execute();
}

$featured_movies_sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18, 22, 23, 25)";
$featured_movies = $mysqli->query($featured_movies_sql)->fetch_all(MYSQLI_ASSOC);

$fantasy_movies_sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12";
$fantasy_movies = $mysqli->query($fantasy_movies_sql)->fetch_all(MYSQLI_ASSOC);

$mysqli->close();
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl3.css">
    <title>Video On Demand</title>
</head>
<body>
<header>
    <h1>Internetowa wypożyczalnia filmów</h1>
    <table>
        <tr>
            <th>Kryminał</th>
            <th>Horror</th>
            <th>Przygodowy</th>
        </tr>
        <tr>
            <td>20</td>
            <td>30</td>
            <td>20</td>
        </tr>
    </table>
</header>
<section>
    <h3>Polecamy</h3>
    <ul>
        <?php foreach ($featured_movies as $fe_movie): ?>
            <li>
                <article>
                    <h4><?= $fe_movie["id"] . ". " . $fe_movie["nazwa"] ?></h4>
                    <img src="<?= $fe_movie["zdjecie"] ?>" alt="film">
                    <p><?= $fe_movie["opis"] ?></p>
                </article>
            </li>
        <?php endforeach ?>
    </ul>
</section>
<section>
    <h3>Filmy fantastyczne</h3>
    <ul>
        <?php foreach ($fantasy_movies as $fa_movie): ?>
            <li>
                <article>
                    <h4><?= $fa_movie["id"] . ". " . $fa_movie["nazwa"] ?></h4>
                    <img src="<?= $fa_movie["zdjecie"] ?>" alt="film">
                    <p><?= $fa_movie["opis"] ?></p>
                </article>
            </li>
        <?php endforeach ?>
    </ul>
</section>
<footer>
    <form method="post" action="video.php">
        <label>
            Usuń film nr.:
            <input name="delete-movie-id" required type="number">
        </label>
        <button type="submit">Usuń film</button>
    </form>
    Stronę wykonał <a href="mailto:ja@poczta.com">00000000000</a>
</footer>
</body>
</html>
