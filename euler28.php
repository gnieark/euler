<?php
//center

$size = 1001;

$x = floor($size/2);
$y = $x;


$table[$x][$y] = 1;
$current = 1;
while($x >= 0){

    //aller à droite
    do{
        $x++;
        $current++;
        $table[$x][$y] = $current;
    }
    while( isset($table[$x][$y -1]) );

    //aller vers le bas
    do{
        $y--;
        $current++;
        $table[$x][$y] = $current;

    }while( isset($table[$x -1][$y]) );

    //aller à gauche
    do{
        $x--;
        $current++;
        $table[$x][$y] = $current;

    }while( isset($table[$x][$y +1]) );

    //monter
    do{
        $y++;
        $current++;
        $table[$x][$y] = $current;
    }while( isset($table[$x + 1][$y]) );


}

//aller à droite
do{
    $x++;
    $current++;
    $table[$x][$y] = $current;
}
while( isset($table[$x][$y -1]) );


$sum = 0;
for($i = 0 ; $i < $size; $i++){
        $sum+= $table[$i][$i];
        $sum+= $table[$size - $i -1][$i];
    
}


echo $sum -1;