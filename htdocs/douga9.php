<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga9 PHP</title>
    <title></title>
  </head>
  <body>
    <p>
      <?php

        $price = 500;

        //$price = $price + 100;
        $price += 100;
        $price *= 100;

        $price++;
        $price--;

        echo nl2br($price . PHP_EOL);

      ?>
    </p>
  </body>
</html>