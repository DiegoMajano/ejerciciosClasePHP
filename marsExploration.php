<?php

function marsExploration($s){

    $message = "SOS";
    $totalChars = strlen($message);
    
    $repeat = strlen($s) / $totalChars;
    
    $messageRepeat = str_repeat($message, $repeat);

    $lettersChanged = 0;
    for ($i=0; $i < strlen($s); $i++) { 
        if(substr($s,$i,1) != substr($messageRepeat, $i, 1)){
            $lettersChanged++;
        }
    }

    return $lettersChanged;
}


$s = "SOSSOSSOS";

print(marsExploration($s))

?>