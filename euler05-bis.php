<?php
/*
* Gnieark's anwser to euler problem 5
* https://projecteuler.net/problem=5
*/

//decrement smaller by 20 and tests
$divisible=false;
$i=0;
while(!$divisible){
    $i+=20;
    //tester si i est divisible
    $divisible=true;
    for($j=19;$j>1;$j--){
        if(fmod($i,$j)<>0){
            $divisible=false;
            break;
        }
    }
}
echo $i;