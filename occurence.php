<?php
echo "Nous allons calculer avec vous le nombre d'occurences d'une lettre dans une chaîne de caractères pour une lettre de votre choix. \n";
echo "Entrer une phrase de votre choix : \n";

$phrase = fread(STDIN, 80);

echo "Entrer la lettre à chercher : \n";
$lettre = fread(STDIN, 80);

$length = strlen($phrase);
$count = 0;

for ($i=0; $i < $length-1; $i++) {
  if ($lettre[0] === $phrase[$i]) {
    $count ++;
  }
}
echo "Nombre de fois trouvé : ", $count, "\n";



 ?>
