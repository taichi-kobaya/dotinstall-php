<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga21 PHP</title>
  </head>
  <body>
    <p>
      <?php

      function showAd()
      {
        echo '----------' . PHP_EOL;
        echo '----Ad----' . PHP_EOL;
        echo '----------' . PHP_EOL;
      }

      showAd();
      echo 'Tom is great!' . PHP_EOL;
      echo 'Bob is great!' . PHP_EOL;
      showAd();
      echo 'Steve is great!' . PHP_EOL;
      echo 'Bob is great!' . PHP_EOL;
      showAd();

      ?>
    </p>
  </body>
</html>