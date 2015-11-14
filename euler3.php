<?php
/*
* Gnieark's anwser to euler problem 3
* https://projecteuler.net/problem=3
*/

echo largestPrimeFactorOf(600851475143);
function largestPrimeFactorOf($number){
    $primesNumbers=array(2);//non considering value 1
    $i=3; //begin to 3

    while($i<=sqrt($number)){
        //echo $i;
        //is $i a factorOf $number
        if(fmod($number,$i)==0){
            //is $i a prime number
             $index=0;
             $isPr=true;
             while(($primesNumbers[$index]<sqrt($i)) && $index < (count($primesNumbers))-1){
                    if((fmod($i,$primesNumbers[$index])==0)){
                        $isPr=false;
                        break;
                    }
                    $index++;
            }
            if($isPr){
                $primesNumbers[]=$i;
                $lastPr=$i;
            }

        }
        $i=$i+2;
    }
    if (isset($lastPr)){
        return $lastPr;
    }else{
        return 1;
    }
}
