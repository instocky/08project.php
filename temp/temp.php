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
    <form class="" action="temp.php" method="post">
      <input type="date" name="sdate" value="<?php echo $_POST[sdate]; ?>">
      <input type="date" name="fdate" value="<?php echo $_POST[fdate]; ?>">
      <input type="submit" name="name" value="date">
    </form>
<?php

include __DIR__ . '/../autopublisher/config/data.php';
include __DIR__ . '/../autopublisher/config/function.php';

// перевод даты в секунды = UNIX format
$sdate = strtotime($_POST[sdate]) . '<br>';
$fdate = strtotime($_POST[fdate]) . '<br>';

$articles = distrArticleDate($articles, $sdate, $fdate);
krsort($articles);

// <!-- вставка -->
// если $_SERVER['REQUEST_TIME'] раньше даты публикации выводим article из массива на страницу
foreach ($articles as $key => $value) {
  if ($key < $_SERVER['REQUEST_TIME']) { // PS выводит все время 8 минут =(
    echo  '<article class="">' . $value . '  ' . date( 'Y-m-d H:m:s', $key) . '</article>'; }} ?>

  </body>
</html>
