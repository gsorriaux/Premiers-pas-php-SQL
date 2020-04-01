<?php

$value = $_GET['pays'];
getCapitale($value);
$listePays = getPays();
//echo $listePays[1];

function getCapitale($pays)
{
  //Connexion à la base de donnée
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=Geographie;charset=utf8', 'root', 'root');

  //Préparation de la requète à l'aide d'une variable
  $req = $bdd->prepare('SELECT Capital FROM liste WHERE Pays= :pays');

  //On execute la requète à en remplacant la variable
  $req->execute(array('pays' => $pays));

  //Boucle sur les résultats envoyé par la bdd
  while ($donnees = $req->fetch()) {
    echo "La capitale est ", $donnees['Capital'];
  }
  //On ferme la demande à la bdd
  $req->closeCursor();
}

function getPays()
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=Geographie;charset=utf8', 'root', 'root');

  $listing = array();

  //Préparation de la requète à l'aide d'une variable
  $req = $bdd->query('SELECT Pays FROM liste');

  //Boucle sur les résultats envoyé par la bdd
  while ($donnees = $req->fetch()) {
    array_push($listing, $donnees['Pays']);
  }
  //On ferme la demande à la bdd
  $req->closeCursor();
  //print_r($listing);
  return $listing;
}

 ?>
