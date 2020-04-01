<div class="sql">
  <?php
    require('req.php');
    $listePays = getPays();
  ?>

  <h2>Gestion d'un formulaire</h2>
  <p>Afficher une combobox listant quelques pays du monde. Quand on choisit un pays, on obtient la capitale. Les pays-capitales sont issus d'une table MySQL PAYS</p>

  <form action="req.php" method="get" target='formresponse'>
    <p>Choisissez le Pays : </p>
    <select name="pays">
      <?php
        foreach ($listePays as $element) {
          echo $element;
          echo "<option value=",$element,">",$element,"</option>";
        }
      ?>
    </select>
    <input type="submit" value="Chercher">
  </form>

  <iframe name="formresponse" width="300" height="35"></iframe>
</div>
