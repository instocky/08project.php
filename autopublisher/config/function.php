<?php
// функция вывода статьи если $_SERVER['REQUEST_TIME'] больше ключа статьи из массива $articles = [1471232000 => '1 - я статья'];




// сравнение даты с датой написания статьи
// используется функция each
function queryDate($array)
{
  $array[0] < $_SERVER['REQUEST_TIME'] ? $answer = true : $answer = false;
  return $answer;
}

// сравнение даты с датой написания статьи
function queryDate0($key)
{
  $key < $_SERVER['REQUEST_TIME'] ? $answer = true : $answer = false;
  return $answer;
}

// создать массив [timecode] => 'текст статьи' timecode=числу секунд с 1-1-1970
// равномерно распределить статьи из массива по временному диапазону
// входные данные массив со статьями
// первая и последняя даты публикации формат год-месяц-число(2016-05-25)
function distrArticleDate($array =0, $startdate = 0, $finishdate = 0)
{
  $interval = ($finishdate - $startdate) / (count($array)-1);
  $array2[] = $startdate;
  foreach ($array as $key => $value) {
    $startdate += $interval;
    array_push($array2, (int)$startdate);
  }

  var_dump($array);
  var_dump($array2);
  // array_combine($array2, $array);
}
 ?>
