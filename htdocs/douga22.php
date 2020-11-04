<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga22 PHP</title>
  </head>
  <body>
    <p>
      <?php

      function showAd($message = Ad) //仮引数
      {
        echo '----------' . PHP_EOL;
        echo '---' . -$message . '---' . PHP_EOL;
        echo '----------' . PHP_EOL;
      }

      showAd(Header Ad); //実引数
      echo 'Tom is great!' . PHP_EOL;
      echo 'Bob is great!' . PHP_EOL;
      showAd(Ad);
      echo 'Steve is great!' . PHP_EOL;
      echo 'Bob is great!' . PHP_EOL;
      showAd(Footer Ad);

      ?>
    </p>
  </body>
</html>