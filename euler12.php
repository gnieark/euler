<?php
/*
* Gnieark's anwser to euler problem 12
* https://projecteuler.net/problem=12
*/

$triangleNumber=1;
$triangleValue=1;
while(countDivisors($triangleValue)<500){
    //echo $triangleValue.":".countDivisors($triangleValue)."\n";
    $triangleNumber++;
    $triangleValue+=$triangleNumber;
}
echo $triangleValue;
function countDivisors($number){
    $right=$number;
    $i=1;
    $counter=0;
    
    while($i<=$right){
        if(fmod($number,$i)==0){
            $right=$number/$i; //increase algo speed
            $counter++;
        }
        $i++;
    }
    return $counter *2 ; 

}