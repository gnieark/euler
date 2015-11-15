<?php
/*
* Gnieark's anwser to euler problem 3
* https://projecteuler.net/problem=3
*/
require_once("_functions.php");
                            
echo largestPrimeFactorOf(600851475143);
function largestPrimeFactorOf($number){
    $right=$number;
    $i=1;
    $prFact=1;
    while(getPrimeNumber($i)<=$right){
        if(fmod($right,getPrimeNumber($i))==0){
            $prFact=getPrimeNumber($i);
            $right=$right/$prFact;
        }        
        $i++;
    }
    return $prFact;
}