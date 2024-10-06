<?php

function square_sum($numbers) : int {//принимаем числа в функции
    $SumElements = 0;
   
   
   
   foreach($numbers as $elements){//При каждой итерации записываем слейд значение в перменную elem
   
   $elem_quadarat = POW($elements,2);//возводим значение в квадрат
   
   $SumElements +=$elem_quadarat;//Прибавляем числа в переменную
   
   }
   
   
   return $SumElements;//возвращаем значение
   
   
   }