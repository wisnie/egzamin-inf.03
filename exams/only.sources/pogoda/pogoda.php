<?php
$mysqli = new mysqli('localhost', 'marek', 'trzcinacukrowa', 'pogoda');

$weather_sql = 'SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy ASC';
$weather_forecasts = $mysqli->query($weather_sql)->fetch_all(MYSQLI_ASSOC);

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Prognoza pogody Wrocław</title>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="logo.png" alt="meteo">
        </div>
        <div class="header-middle">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div class="header-right">
            <p>maj, 2019 r.</p>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>DATA</th>
                    <th>TEMPRERATURA W NOCY</th>
                    <th>TEMPRERATURA W DZIEŃ</th>
                    <th>OPADY [mm/h]</th>
                    <th>CIŚNIENIE [hPa]</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($weather_forecasts as $wf) : ?>
                    <tr>
                        <td><?= $wf['data_prognozy'] ?></td>
                        <td><?= $wf['temperatura_noc'] ?></td>
                        <td><?= $wf['temperatura_dzien'] ?></td>
                        <td><?= $wf['opady'] ?></td>
                        <td><?= $wf['cisnienie'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
    <section>
        <div class="section-left">
            <img src="obraz.jpg" alt="Polska, Wrocław">
        </div>
        <div class="section-right">
            <a download="" href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>

</html>
