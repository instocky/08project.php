<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
    <h1>Свежие статьи</h1>
<?php
echo date( 'Y-m-d H:m', $_SERVER['REQUEST_TIME']);
echo $_SERVER['REQUEST_TIME'];


include __DIR__ . '/config/data.php';
include __DIR__ . '/config/function.php';

foreach ($articles as $key => $value) {
  if (queryDate0($key)) {
    ?>




      <?php echo
      '<article class="">' . $value . '  ' . date( 'Y-m-d H:m:s', $key) .

      '</article>'; }} ?>
  </body>
</html>
