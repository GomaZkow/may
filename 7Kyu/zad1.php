<?php

function multiples(int $m, float $n): array {
 
    $index =0;//создаем переменную для индексации масива
    
    for($i=1;$i<=$m;$i++)//проходим циклом по числам
    {
      
    $array[$index++] = (float)$n*$i;//записываем первые делители числа
      
    }
    return $array;//возрващаем массив
    
    
    
    
    }