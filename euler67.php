<?php
/*
* Gnieark's anwser to euler problem 67
* https://projecteuler.net/problem=67
*/

$triangleStr=file_get_contents("inc/p067_triangle.txt");

$arr=explode("\n",$triangleStr);
$triangle=array();
foreach($arr as $line){
    $triangle[]=explode(" ",$line);
}
unset($triangle[count($triangle) -1 ]); //dont take last empty line

while(count($triangle)>1){
    $i=count($triangle) -2;
    for($cell=0; $cell < count($triangle[$i]); $cell++){
        if($triangle[$i +1 ][$cell] > $triangle[$i +1 ][$cell + 1]){

            $triangle[$i][$cell] = $triangle[$i][$cell] + $triangle[$i +1 ][$cell];
        }else{
            $triangle[$i][$cell] = $triangle[$i][$cell] + $triangle[$i +1 ][$cell +1];
        }
    }
    //remove last line
    unset($triangle[$i+1]);
}
echo $triangle[0][0];