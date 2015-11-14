<?php
/*
* Gnieark's anwser to euler problem 6
* https://projecteuler.net/problem=6
*/
$sumOfTheSquares=0;
for($i=1;$i<101;$i++){
    $sumOfTheSquares+=pow($i,2);
}
$sum=0;
for($i=1;$i<101;$i++){
    $sum+=$i;
}
echo pow($sum,2) - $sumOfTheSquares;