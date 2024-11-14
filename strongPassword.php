<?php 

function minimumNumber($n, $password){

    $numbers = "0123456789";
    $lowerCase = "abcdefghijklmnopqrstuvwxyz";
    $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $specialCharacters = "!@#$%^&*()-+";
    
    $hasDigit = false;
    $hasLower = false;
    $hasUpper = false;
    $hasSpecial = false;
    
   
    for ($i = 0; $i < $n; $i++) {
        $char = $password[$i];
        if (strpos($numbers, $char) !== false) $hasDigit = true;
        if (strpos($lowerCase, $char) !== false) $hasLower = true;
        if (strpos($upperCase, $char) !== false) $hasUpper = true;
        if (strpos($specialCharacters, $char) !== false) $hasSpecial = true;
    }
    
    $missingTypes = 0;
    if (!$hasDigit) $missingTypes++;
    if (!$hasLower) $missingTypes++;
    if (!$hasUpper) $missingTypes++;
    if (!$hasSpecial) $missingTypes++;
    
    
    return max($missingTypes, 6 - $n);
}


?>