<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga29 PHP</title>
  </head>
  <body>
    <p>

      <?php

    // $score1 = 90;
    // $score1 = 40;
    // $score1 = 100;

    $scores = [
      90,
      40,
      100,
    ];

    $scores[1] = 60;
    echo $scores[1] . PHP_EOL;

      ?>
    </p>
  </body>
</html>