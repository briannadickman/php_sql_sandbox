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

      print_r(array_keys($phone_numbers)); //prints the 'keys' in phone_numbers
      print_r(array_values($phone_numbers)); //prints the values of each key

      //hello World
      $hello = 'Hello World!';
      $name = 'Bri';
      $greeting = 'Good Morning $name and $hello';
      $introduction = 'Nice to meet you ' . $name;

      echo strlen($greeting); //string length
      $games = ['Fallout 4', 'Sims 4', 'Syrim', 'Little Big Planet'];
      $game_list = explode(',', $games); //breaks up string by declared divider
      $games = implode(',', $game_list);

      for($i = 0; $i < count($vegetableArray); $i++){
        echo $vegetableArray[$i] . "\n";
      }

      $counter = 0;

      while ($counter < 10){
        $counter += 1;
        if ($counter % 2 == 0){
          echo 'Skipping even number';
          continue;
        }
        echo 'Count is now at: $counter.\n';
      }

      // Write the function squared_sum here
      function squared_sum($numbers){
          $total_square_sum = 0;
          foreach ($numbers as $number) {
          	$square_sum = $number * $number;
              $total_square_sum += $square_sum;
          }
          echo $total_square_sum;
      }

      echo squared_sum([56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75, 10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32, 8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97]);

    ?>
  </p>

  </body>
</html>
