<?php
function disemvowel($string) {
    $remove  = array("a","i","e","u","o","O","A","I","E","U",);//добавляем бан символы
  echo str_replace($remove,"", $string);//удаляем с помощью встроеной функции replace 
}
