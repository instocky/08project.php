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

 ?>
