/*Используя switch по заданному $n, выведите числа от $n до 15 включительно, например 10 11 12 13 14 15 при $n=10
*как вариант используйте цикл*/

<?php
$s="С помощью switch" . "\n";
$n=(float)readline("Введите n: ") . "\n";
 //Первый вариант использование switch
switch ($n){
case 1: echo $s . "1 2 3 4 5 6 7 8 9 10 11 12 13 14 15" . "\n";
break;
case 2: echo $s . "2 3 4 5 6 7 8 9 10 11 12 13 14 15" . "\n";
break;
case 3: echo $s . "3 4 5 6 7 8 9 10 11 12 13 14 15" . "\n";
break;
case 4: echo $s . "4 5 6 7 8 9 10 11 12 13 14 15" . "\n";
break;
case 5: echo $s . "5 6 7 8 9 10 11 12 13 14 15" . "\n";
break;
case 6: echo $s . "6 7 8 9 10 11 12 13 14 15" . "\n";
break;
case 7: echo $s . "7 8 9 10 11 12 13 14 15" . "\n";
break;
case 8: echo $s . "8 9 10 11 12 13 14 15" . "\n";
break;
case 9: echo $s . "9 10 11 12 13 14 15" . "\n";
break;
case 10: echo $s . "10 11 12 13 14 15" . "\n";
break;
case 11: echo $s . "11 12 13 14 15" . "\n";
break;
case 12: echo $s . "12 13 14 15" . "\n";
break;
case 13: echo $s . "13 14 15" . "\n";
break;
case 14: echo $s . "14 15" . "\n";
break;
case 15: echo $s . "15" . "\n";
break;
} 

//Второй вариант церез цикл
$f="С помощью цикла" . "\n";
$n=(float)readline("Введите n: ");
echo $f; 
for ($i=$n; $i<=15; $i++){
        echo $i . " ";
    }
    