<?php
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'dane');
$mysqli->set_charset('utf8');

$title = $_POST['title'];
$genre = $_POST['genre'];
$production_year = $_POST['production-year'];
$rating = $_POST['rating'];

$data_set = !(empty($title) || empty($genre) || empty($production_year) || empty($rating));
if ($data_set) {
    $add_movie_sql = 'INSERT INTO filmy VALUES(NULL, ?, 9, ?, ?, ?);';
    $add_movie = $mysqli->prepare($add_movie_sql);
    $add_movie->bind_param('isii', $genre, $title, $production_year, $rating);
    $add_movie->execute();

    echo "Film {${htmlspecialchars($title)}} został dodany do bazy.";
}

$mysqli->close();
