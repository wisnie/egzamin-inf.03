<?php
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'egzamin');

$bmi_info_sql = 'SELECT id, informacja, wart_min FROM bmi';
$bmi_info = $mysqli->query($bmi_info_sql)->fetch_all(MYSQLI_ASSOC);

$user_weight = $_POST['weight'];
$user_height = $_POST['height'];
$data_provided = !empty($user_weight) && !empty($user_height);
if ($data_provided) {
    $bmi_value = ($user_weight / ($user_height ** 2)) * 10000;
    $bmi_group = match (true) {
        $bmi_value >= 31 => 4,
        $bmi_value >= 26 => 3,
        $bmi_value >= 19 => 2,
        default => 1,
    };

    $date_str = date('Y-m-d');
    $insert_bmi_record_sql = 'INSERT INTO wynik VALUES (NULL, ?, ?, ?)';
    $insert_bmi_record = $mysqli->prepare($insert_bmi_record_sql);
    $insert_bmi_record->bind_param('isi', $bmi_group, $date_str, $bmi_value);
    $insert_bmi_record->execute();
};

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Twój wskaźnik BMI</title>
</head>

<body>
    <header>
        <div class="header-banner">
            <h2>Oblicz wskaźnik BMI</h2>
        </div>
        <div class="header-logo">
            <img src="wzor.png" alt="liczymy BMI">
        </div>
    </header>
    <section>
        <div class="section-left">
            <img src="rys1.png" alt="zrzuć kalorie">
        </div>
        <div class="section-right">
            <h1>Podaj dane</h1>
            <form action="waga.php" method="post">
                <label>
                    Waga:
                    <input type="number" name="weight" id="weight">
                </label>
                <label>
                    Wzrost [cm]:
                    <input type="number" name="height" id="height">
                </label>
                <button type="submit">Licz BMI i zapisz wynik</button>
            </form>
            <?php if ($data_provided) : ?>
                <span>Twoja waga: <?= $user_weight ?>; Twój wzrost<?= $user_height ?></span>
                <br>
                <span>BMI wynosi: <?= $bmi_value ?></span>
            <?php endif ?>
        </div>
    </section>
    <main>
        <table>
            <thead>
                <th>lp.</th>
                <th>Interpretacja</th>
                <th>zaczyna się od...</th>
            </thead>
            <tbody>
                <?php foreach ($bmi_info as $bmi_entry) : ?>
                    <tr>
                        <td><?= $bmi_entry['id'] ?></td>
                        <td><?= $bmi_entry['informacja'] ?></td>
                        <td><?= $bmi_entry['wart_min'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
    <footer>
        Autor: 00000000000
        <a href="kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
</body>

</html>