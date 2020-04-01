
<?php
echo "Bonjour, combien de note souhaitez-vous entrer ?";
$nbrNote = (int)fread(STDIN, 80);
$tableau = array();
$note = 0;
for ($i=0; $i < ($nbrNote); $i++) {
    echo "Entrez une note /20 : ";
    $note = (int)fread(STDIN, 80);
    echo "Type de donnée: ",var_dump($note), "\n";
    while (!Verif($note)) {
      echo "Entrez une note /20 : ";
      $note = (int)fread(STDIN, 80);
    }
    array_push($tableau, $note);
}
print_r($tableau);
echo "La moyenne est de : ", Moyenne($tableau), "\n" ;
echo "La minimum est : ", Mini($tableau), "\n" ;
echo "La maximum est : ", Maxi($tableau), "\n" ;

function Moyenne($tableau)
{
  $somme = 0;
  $compteur = count($tableau);
  for ($i=0; $i < $compteur; $i++) {
    $somme = $somme + $tableau[$i];
  }
  return $somme/$compteur;
};
function Mini($tableau)
{
  $mini = 21;
  $compteur = count($tableau);
  for ($i=0; $i < $compteur; $i++) {
    if ($mini > $tableau[$i]) {
      $mini = $tableau[$i];
    }
  }
  return $mini;
};
function Maxi($tableau)
{
  $maxi = 0;
  $compteur = count($tableau);
  for ($i=0; $i < $compteur; $i++) {
    if ($maxi < $tableau[$i]) {
      $maxi = $tableau[$i];
    }
  }
  return $maxi;
}
function Verif($value)
{
  if ($value > 20) {
    echo "Note supérieur à 20, entrer une note valide. ";
    return false;
  } elseif ($value < 0) {
    echo "Note inférieur à 0, entrer une note valide. ";
    return false;
  } elseif (gettype($value) !== "integer") {
    echo "Merci d'entrer un entier.";
    return false;
  }  else {
    return true;
  }
}
 ?>
