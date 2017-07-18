<?php
  $greeting = 'Hello World';
  $show1 = 'Outlander';
  $show2 = 'Game of Thrones';
  $fruitArray = ['apples', 'watermelon', 'pineapple', 'blueberries', 'oranges'];
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
    <h3>My Favorite Fruits</h3>
    <p><?php echo $fruitArray
      $first_fruit = reset($fruitArray);
      $last_index = count($fruitArray) - 1;
      $last_fruit = $fruitArray($last_index);
      echo 'My favorite fruit is: $first_fruit';
      echo 'My least favorite fruit is: $last_fruit';
    ?>
  </p>

  </body>
</html>
