<?php
function removeEveryOther($array) {//принимаем значения
    $length = count($array);//берем длинну вводного масива
    $newArray = []; //создаем новый массив

$index = 0;
    for ($i = 0; $i < $length; $i++) {//проходим циклом по длинне
        if($i%2==0){//входим в ветвление если индекс четный


            $newArray[$index++] = $array[$i]; //записываем с 0 индекса все элементы соответвующим условию
 $index++;//добавляем к счетчику номера индекса единицу
}

 
        }
    

    return $newArray;//возвращаем новый массив
}