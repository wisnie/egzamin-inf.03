<?php
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'sklep');
$mysqli->set_charset('utf8');

$featured_items_sql = 'SELECT nazwa, cena FROM towary LIMIT 4';
$featured_items = $mysqli->query($featured_items_sql)->fetch_all(MYSQLI_ASSOC);

$user_selection = match ($_GET['item']) {
    'notebook32' => 'Zeszyt 32 kartki',
    'notebook64' => 'Zeszyt 60 kartek',
    'compasses' => 'Cyrkiel',
    'ruler' => 'Linijka 30 cm',
    default => NULL
};

$amount = $_GET['amount'];
$data_filled = !(empty($user_selection) || empty($amount));
if ($data_filled) {
    $get_price_sql = 'SELECT cena FROM towary WHERE nazwa = ?';
    $get_price = $mysqli->prepare($get_price_sql);
    $get_price->bind_param('s', $user_selection);
    $get_price->execute();

    $item_price = ($get_price->get_result()->fetch_assoc())['cena'];
    $final_price = $item_price * $amount;
};

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Hurtownia szkolna</title>
</head>

<body>
    <header>
        <h1>Hurtownia z najelpszymi cenami</h1>
    </header>
    <main>
        <div class="main-prices">
            <h2>Nasze ceny</h2>
            <table>
                <tbody>
                    <?php foreach ($featured_items as $fi) : ?>
                        <tr>
                            <td><?= $fi['nazwa'] ?></td>
                            <td><?= $fi['cena'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="main-cost">
            <h2>Koszt zakupów</h2>
            <form action="index.php" method="get">
                 <div>
                    <label for="item-select">wybierz artykuł</label>
                    <select name="item" id="item-select">
                        <option value="notebook32">Zeszyt 32 kartki</option>
                        <option value="notebook64">Zeszyt 64 kartki</option>
                        <option value="compasses">Cyrkiel</option>
                        <option value="ruler">Linijka 30cm</option>
                    </select>
                </div>
                <div>
                    <label for="amount-input">liczba sztuk:</label>
                    <input type="number" name="amount" id="amount-input">
                </div>
                <button type="submit">OBLICZ</button>
            </form>
            <?php if (isset($final_price)) : ?>
                <span>wartość zakupów <?= $final_price ?></span>
            <?php endif ?>
        </div>
        <div class="main-contact">
            <h2>Kontakt</h2>
            <img src="zakupy.png" alt="hurtownia">
            <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </div>
    </main>
    <footer>
        <h4>Witrynę wykonał: 00000000000</h4>
    </footer>
</body>

</html>
