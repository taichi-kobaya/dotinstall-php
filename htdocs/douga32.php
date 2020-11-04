<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga32 PHP</title>
  </head>
  <body>
    <p>

      <?php
    $moreScores = [
      55,
      72,
      'perfect',
      [90,42,88],
    ];

    $scores = [
      90,
      40,
      ...$moreScores,
      100,
    ]

    //print_r($scores);

    echo $scores [5][2] . PHP_EOL;

      ?>
    </p>
  </body>
</html>