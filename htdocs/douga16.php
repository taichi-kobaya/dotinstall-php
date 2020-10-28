<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga16 PHP</title>
  </head>
  <body>
    <p>
      <?php

       $signal = 'red';

      //  if($signal === 'red') {
      //     echo 'Stop!' . PHP_EOL;
      //  } elseif($signal === 'yellow') {
      //     echo 'Caution!' . PHP_EOL;
      //  } elseif($signal === 'blue') {
      //     echo 'Go!' . PHP_EOL;
      // }


      switch($signal) {
        case 'red':
          echo 'Stop!' . PHP_EOL;
        break;
        case 'yellow':
          echo 'Caution!' . PHP_EOL;
        break;
        case 'blue':
          echo 'Go!' . PHP_EOL;
        break;
      }

      ?>
    </p>
  </body>
</html>