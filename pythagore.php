<?php
echo "Bienvenue dans le théorème de Pythagore. \n";
echo "Veuillez entrer : \n";
echo "La longueur a : \n";
$a = (int)fread(STDIN, 80);
echo "La largeur b : \n";
$b = (int)fread(STDIN, 80);
//Mise au carrée
$a = $a * $a;
$b = $b * $b;
//c^2 = a^2 + b^2
$c = sqrt($a) + sqrt($b);

echo "La valeur de l'hypoténuse est de : ", $c, "\n";

 ?>
