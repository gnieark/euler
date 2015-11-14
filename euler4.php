<?php
/*
* Gnieark's anwser to euler problem 4
* https://projecteuler.net/problem=4
*/

$pal=0;
for($i=1000;$i>99;$i--){
    for($j=1000;$j>99;$j--){
        $prod=$i*$j;
        if ((isPalindrome($prod)) && ($prod>$pal)) {
            $pal=$prod;
        }
    }
}
echo $pal;

function isPalindrome($number){
    if(strrev(strval($number)) == strval($number)){
        return true;
    }
}