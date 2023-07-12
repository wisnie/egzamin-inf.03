<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <link href="styl_1.css" rel="stylesheet">
    <title>Wędkowanie</title>
  </head>
  <body>
    <?php
     $user = "marek";
     $pass = "trzcinacukrowa";
     try{
     $dbh = new PDO("mysql:host=localhost;dbname=wedkowanie", $user, $pass);

    foreach($dbh->query('SELECT * from ryby') as $row) {
        print_r($row);
    }
    $dbh = null;
    } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
    }
     ?>
    <header>
      <h1>Wędkowanie</h1>
    </header>
    <main>
      <section>
	<h2>Ryby zamieszkujące rzeki</h2>
	<h2>Ryby drapieżne naszych wód</h2>	
      </section>
      <section>
	<img src="ryba1.jpg" alt="Sum">
	<a href="kwerendy.txt">Pobierz kwerendy</a>
      </section>
    </main>
    <footer>
      Stronę wykonał: 00000000000
    </footer>
  </body>
</html>
