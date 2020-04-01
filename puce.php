<div class="puce">
  <?php
    $prenom = array('Cyril', 'Sofiane', 'Jean-Philippe', 'Régis', 'Olivier', 'Nicolas', 'Geoffrey');
    $length = count($prenom);

    echo "<h2>Exercice des puces</h2>";
    echo "<p>Afficher une liste à puce (tags li, ul) contenant une liste de prénoms ('codés en dur') en utilisant une boucle.";

    echo "<ul>";
    for ($i=0; $i < $length; $i++) {
      echo "<li>",$prenom[$i],"</li>";
    }
    echo "</ul>";
  ?>
</div>
