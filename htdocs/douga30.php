<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga30 PHP</title>
  </head>
  <body>
    <p>

      <?php

    $scores = [
      'first' => 90,
      'second' => 40,
      'third' => 100,
     
    ];

    // var_dump($scores);
    // print_r($scores);

    echo $scores['third'] . PHP_EOL;

      ?>
    </p>
  </body>
</html>