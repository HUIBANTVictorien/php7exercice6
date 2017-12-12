<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 6 partie 3 php</title>
  </head>
  <body>
    <?php
    $text = 'C\'est presque bon';
      for ($number = 20; $number > 0; $number--) {
        echo $text.'<br/>';
      }
      if ($number == 0) {
        echo ('C\'est bon !');
      }
     ?>
  </body>
</html>
