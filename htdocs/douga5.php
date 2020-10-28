<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga5 PHP</title>
    <title></title>
  </head>
  <body>
    <p>
      <?php

      $name = "taichi";
      // $name = "dotinstall";

        // echo "Hello taichi" . PHP_EOL;
        // echo "Hi taichi" . PHP_EOL;

        echo nl2br("Hello " . $name . PHP_EOL);
        echo nl2br("Hi " . $name . PHP_EOL);

      ?>
    </p>
  </body>
</html>