<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga19 PHP</title>
  </head>
  <body>
    <p>
      <?php

      //  $hp = 100;
       $hp = -50;

      //  while ($hp >0) {
      //    echo "Your HP: $hp" . PHP_EOL;
      //    $hp -= 15;

      do {
        echo "Your HP: $hp" . PHP_EOL;
         $hp -= 15;
      } while ($hp >0);


      ?>
    </p>
  </body>
</html>