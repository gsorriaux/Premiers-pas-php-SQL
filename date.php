<div class="date">
  <?php
  date_default_timezone_set('Europe/Amsterdam');
  $date = strftime("%d-%m-%Y");
  $time = strftime("%HH%M");
   ?>
  <h2>Nous sommes le <?php echo $date ?>, il est <?php echo $time ?></h2>
</div>
