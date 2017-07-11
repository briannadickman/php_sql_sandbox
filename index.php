<?php
  $greeting = 'Hello World';
  $show1 = 'Outlander';
  $show2 = 'Game of Thrones';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP/SQL Sandbox</title>
  </head>
  <body>
    <!-- TO DO LIST with SQL and PHP -->
    <h1>
      <?php
        echo $greeting;
      ?>
    </h1>
    <h3>My Favorite TV Shows</h3>
    <ul>
      <li><?php echo $show1; ?></li>
      <li><?php echo $show2; ?></li>
    </ul>

  </body>
</html>
