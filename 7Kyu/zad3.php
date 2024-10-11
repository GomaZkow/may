<?php

function square_digits($num): int {


    $result  =  '';//переменная для хранения итогового числа
    $digit = str_split($num);//делаем массив из строки
    
      
    foreach($digit as $elem)//проходим циклом по массиву 
    {
      $result .= pow($elem,2);//возводим элементы в квадрат и соеденяем их 
    }
      return $result;
    }