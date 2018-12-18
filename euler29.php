<?php

$terms = array();

for($a = 2; $a <=100 ; $a++){
    for($b = 2; $b <=100 ; $b ++){
        $r = bcpow($a,$b);
        if( !in_array($r,$terms)){
            $terms[] = $r;
        }

    }
}
echo count($terms);