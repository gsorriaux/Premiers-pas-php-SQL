<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="exercice.css">
    <title>Exercice PHP</title>
  </head>
  <body>
    <header>
      <h1>Bienvenue sur la Page d'exercice PHP <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/1280px-Webysther_20160423_-_Elephpant.svg.png" alt="logo php"></h1>
    </header>
    <?php
    include 'date.php';
    echo "<div class='exo'>";
    include 'puce.php';
    include 'formulaire.php';
    echo "</div>";
     ?>
  </body>
</html>
