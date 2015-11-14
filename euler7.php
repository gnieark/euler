<?php
/*
* Gnieark's anwser to euler problem 6
* https://projecteuler.net/problem=6
*/

$primesNumbers=array(2);//ommit 1
$i=3;
while(count($primesNumbers)<10001){
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
        echo (count($primesNumbers))." ".$i."\n";
    }
    $i=$i+2;
}