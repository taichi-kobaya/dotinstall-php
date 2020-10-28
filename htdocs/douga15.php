<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga15 PHP</title>
  </head>
  <body>
    <p>
      <?php

      $score = 80;
      $name = 'taichi';

        // if($score >= 50) {
        //   if($name === 'taichi'){
        //     echo 'good job!' . PHP_EOL;
        //  }
        // }

        // && and なおかつ
        // || or もしくは
        // ! ～ではない

        if($score >= 50 && $name === 'taichi'){
          echo 'good job!' . PHP_EOL;
        }

      ?>
    </p>
  </body>
</html>