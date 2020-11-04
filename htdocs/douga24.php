<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga24 PHP</title>
  </head>
  <body>
    <p>
      <?php

        $rate = 1.1; //グローバルスコープ

        function sum($a + $b + $c){
          
          // global $rate;
          $rate = 1.08; //ローカルスコープ
          return ($a + $b + $c) * $rate;
        }

        echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; 

      ?>
    </p>
  </body>
</html>