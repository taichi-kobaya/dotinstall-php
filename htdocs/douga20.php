<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga20 PHP</title>
  </head>
  <body>
    <p>
      <?php

   for ($i = 1; $i <= 10; $i++) {
    //  if ($i === 4) {
    //     if ($i % 3 === 0) {
    //       continue;
    //  }
      if ($i === 4) {
        break;
        }
     echo $i . PHP_EOL;
   }


      ?>
    </p>
  </body>
</html>