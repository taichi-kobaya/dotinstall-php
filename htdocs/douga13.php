<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga13 PHP</title>
  </head>
  <body>
    <p>
      <?php

    //  $score = 85;
    //  $score = 70;
     $score = 40;

     if ($score >= 80) {
       echo 'Great!' . PHP_EOL;
     } else if ($score >= 60) {
       echo 'Good!' . PHP_EOL;
     } else {
       echo 'OK!' . PHP_EOL;
     }

      ?>
    </p>
  </body>
</html>