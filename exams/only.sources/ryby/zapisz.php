<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'wedkowanie');

$mysqli -> set_charset('utf8');

// User data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];

var_dump($first_name);
var_dump($last_name);
var_dump($address);

$data_filled = !(empty($first_name) || empty($last_name) || empty($address));
if ($data_filled) {
    $add_card_sql = 'INSERT INTO karty_wedkarskie VALUES (NULL, ?, ?, ?, NULL, NULL)';
    $add_card = $mysqli->prepare($add_card_sql);
    $add_card->bind_param('sss', $first_name, $last_name, $address);
    $add_card->execute();
};
$mysqli->close();
