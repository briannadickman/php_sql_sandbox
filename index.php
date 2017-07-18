<?php
  $greeting = 'Hello World';
  $show1 = 'Outlander';
  $show2 = 'Game of Thrones';
  $fruitArray = ['apples', 'watermelon', 'pineapple', 'blueberries', 'oranges'];
  $vegetableArray = ['green peppers', 'carrots', 'tomato', 'brussel sprouts', 'onions'];
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

      $all_produce = array_merge($fruitArray, $vegetableArray);
      echo 'Here is all of the produce I have: $all_produce';

      $phone_numbers = [
        'Ben' => '651-769-5235',
        'Mom' => '218-850-0519',
        'Me' => '701-429-4214',
        'Kelsie' => '218-849-7962'
      ];

      echo 'The phone numbers I have memorized are: $phone_numbers';

      if (array_key_exists('Kelsie', $phone_numbers)) {
        echo 'Kelsies phone number is: $phone_numbers("Kelsie")';
      } else {
        echo 'Kelsies phone number is not a number you have memorized!';
      }

      if (array_key_exists('Rachel', $phone_numbers)) {
        echo 'Rachels phone number is: $phone_numbers("Rachel")';
      } else {
        echo 'Rachels phone number is not a number you have memorized!';
      }
    ?>
  </p>

  </body>
</html>
