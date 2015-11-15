<?php
/*
* Gnieark's anwser to euler problem 5
* https://projecteuler.net/problem=5
*/
$taller=1;
for ($i=1;$i<21;$i++){
    $taller=$taller*$i;
}

//decrement smaller by 20 and test
$smaller=$taller;
for ($i=$taller;$i>0;$i+=-20){
    //tester si i est divisible
    $divisible=true;
    for($j=19;$j>0;$j--){
        if(fmod($i,$j)<>0){
            $divisible=false;
            break;
        }
    }
    if($divisible){
        $smaller=$i;
        echo $i."\n";
    }

}
echo $smaller;