<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga6 PHP</title>
  </head>
  <body>
    <p>
      <?php

      $name = "taichi";

        // echo 'It's Sunday. Hello' . $name . PHP_EOL;
        // echo "It's Sunday. Hello" . $name . PHP_EOL;
        // echo "It's Sunday. Hello $name"  . PHP_EOL;
        // echo "It's \"Sunday\". Hello" . $name . PHP_EOL;
        echo nl2br("It's \"Sunday\". \t Hello $name" . PHP_EOL);
        

      ?>
    </p>
  </body>
</html>