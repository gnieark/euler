<?php

function isPrimary($number){
    $i=1;
    while(getPrimeNumber($i) <= sqrt($number)){
        if(fmod($i,getPrimeNumber($i))==0){
            return false;
        }
        $i=$i+2;
    }
    return true;
}

function getPrimeNumber($order){

    static $primeNumbersList=array(2,3);
    //if already finded:
    if(isset($primeNumbersList[$order-1])){
        return $primeNumbersList[$order-1];
    }
    
    $i=$primeNumbersList[count($primeNumbersList)-1] + 2;

    while (count($primeNumbersList) < $order){
        $isPrimaryNumber=true;
        foreach($primeNumbersList as $pr){
            
            if($pr>sqrt($i)){
                break;
            }
            if(fmod($i,$pr)==0){
                $isPrimaryNumber=false;
                break;
            }
        }
        if($isPrimaryNumber){
            $primeNumbersList[]=$i;
        }
        $i=$i+2;//sert à rien de tester les nombres pairs
    }
    return $i-2;
}