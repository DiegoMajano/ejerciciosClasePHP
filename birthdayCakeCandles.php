<?php

function birthdayCakeCandles($candles){

    $max = max($candles);
    $count = 0;

    for ($i=0; $i < count($candles); $i++) { 
        
        if($candles[$i] == $max){
            $count++;
        }
    }

    return $count;
}

$candles = [3,2,1,3];

print(birthdayCakeCandles($candles))

?>