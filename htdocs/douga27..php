<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga27 PHP</title>
  </head>
  <body>
    <p>

      <?php

        declare(strict_types=1);

        function showinfo(string $name, int $score):void
        {
          echo $name . ':' . PHP_EOL;
        }

        // showinfo('taguchi',40);
        // showinfo('taguchi','dotinstall');
        showinfo('taguchi','4');

      ?>
    </p>
  </body>
</html>