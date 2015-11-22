<?php
/*
* Gnieark's anwser to euler problem 25
* https://projecteuler.net/problem=25
*/

//see  https://fr.wikipedia.org/wiki/Suite_de_Fibonacci#Avec_la_formule_de_Binet
echo intval((log(10)*999 + (log(5)/2) ) / log(1.61803398875)) +1;

/*
Very long solution that didn't test :

$i=1;
$j=2;
$count=2;
while(strlen($i)<1000){
    $new=gmp_add($i,$j);
    $i=$j;
    $j=$new;
    $count++;
}


echo $count;

*/