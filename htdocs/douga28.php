<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga28 PHP</title>
  </head>
  <body>
    <p>

      <?php

        declare(strict_types=1);

        function getAward(?int $score): ?string
        {
          return $score >= 100 ? 'Gold Medal' : null;
        }

        echo getAward(150) . PHP_EOL;
        echo getAward(40) . PHP_EOL;

      ?>
    </p>
  </body>
</html>