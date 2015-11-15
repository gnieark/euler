<?php
/*
* Gnieark's anwser to euler problem 10
* https://projecteuler.net/problem=10
*/

$primesNumbers=array(2);//ommit 1
$i=3;
$sum=2;
while($i<2000000){
    $isPrimaryNumber=true;
    $index=0;
    while(($primesNumbers[$index]<=sqrt($i)) && $index < count($primesNumbers)){
        if(fmod($i,$primesNumbers[$index])==0){
            $isPrimaryNumber=false;
            break;
        }
        $index++;
    }
    if($isPrimaryNumber){
        $primesNumbers[]=$i;
        $sum+=$i;
    }
    $i=$i+2;
}
echo $sum;