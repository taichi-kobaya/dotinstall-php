<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Douga7 PHP</title>
  </head>
  <body>
    <p>
      <?php 
      
      $name = 'taichi';

      // $text = <<<'EOT' //nowdoc
      // $text = <<<"EOT" //heredoc
        $text = <<<EOT
        hello! $name
          this is loooooong
        text!
      EOT;

      echo $text;
      
      ?>
    </p>
  </body>
</html>