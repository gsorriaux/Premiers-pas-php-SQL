<?php
echo "Nous allons determiné si votre nombre est pair ou impair.\n";
echo "Entrer un nombre :\n";

$nb = (int)fread(STDIN, 80);
$modulo = ($nb % 2);

if ($modulo == 0) {
  echo "Votre nombre est pair. \n";
} else {
  echo "Votre nombre est impair. \n";
}
?>
