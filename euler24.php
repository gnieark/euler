<?php
/*
* Gnieark's anwser to euler problem 24
* https://projecteuler.net/problem=24
*/

/*
0,1,2,3,4,5,6,7,8,9
0,1,2,3,4,5,6,7,9,8
0,1,2,3,4,5,6,8,7,9
0,1,2,3,4,5,6,8,9,7
0,1,2,3,4,5,6,9,7,8
0,1,2,3,4,5,6,9,8,7
0,1,2,3,4,5,7,6,8,9

*/

$arrayToPermut=array(0,1,2,3,4,5,6,7,8,9);
for($i=1;$i<1000000;$i++){
 $arrayToPermut=lexicographic_permut($arrayToPermut);
}
echo implode("",$arrayToPermut)."\n";


function permut($index1,$index2,$arr){
  $temp=$arr[$index1];
  $arr[$index1]=$arr[$index2];
  $arr[$index2]=$temp;
  return $arr;
}

function lexicographic_permut($arr){
  
  // dans le sens unités (rang 9) -> dizaines (rang 8) -> centaines (rang 7) ....
  // trouver la première position où le chiffre de rang n est supérieur à celui de rang n-1
    $index1=count($arr) -2;
    while($arr[$index1] >= $arr[$index1+1]){
       $index1--;
       if($index1 == -1){
	  //l'array est déja totalement inversé (1,2,3) => (3,2,1)
	  return false;
       }
    }

    //trouver un nombre plus grand que celui trouvé avant : $arr[$index1]
    for($index2 = count($arr) - 1 ; $arr[$index2] <= $arr[$index1]; $index2--){}   
    //les permutter
    $arr=permut($index1,$index2,$arr);
    
    //mettre ce qui suit $index1 dans l'ordre
    $partOfArr=array();
    for($i = $index1+1; $i < count($arr); $i++){
      $partOfArr[]=$arr[$i];
    }
    sort($partOfArr);
    $j=0;
    for($i = $index1+1; $i < count($arr); $i++){
      $arr[$i]=$partOfArr[$j];
      $j++;
    }
    return $arr;
}