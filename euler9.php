<?php
/*
* Gnieark's anwser to euler problem 9
* https://projecteuler.net/problem=9
*/

/*
a²+b²=c²
a+b+c=1000
so a+b+sqrt(a²+b²) = 1000

and 
c²> a²
a<c<1000
a and b <500
*/

for($a=1;$a<501;$a++){
    for($b=1;$b<501;$b++){
        if($a+$b+sqrt(pow($a,2)+pow($b,2)) == 1000){
            echo ($a*$b*sqrt(pow($a,2)+pow($b,2)));
            break 2;
        }
    }
}