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
include __DIR__ . '/config/data.php';
include __DIR__ . '/config/function.php';

echo date( 'Y-m-d H:m', 1471250000);

$_SERVER['REQUEST_TIME'] . '<br>'; // секунд с 1 января 1970

// если $_SERVER['REQUEST_TIME'] раньше даты публикации выводим article из массива на страницу
foreach ($articles as $key => $value) {
  if ($key < $_SERVER['REQUEST_TIME']) {
    ?>




      <?php echo
      '<article class="">' . $value . '  ' . date( 'Y-m-d H:m', $key) . 

      '</article>'; }} ?>
  </body>
</html>
