<?php
function mergeSort($numbers) {
    
    if (count($numbers) <= 1) {
        return $numbers;
    }

    $middle = intdiv(count($numbers), 2);
    $left = array_slice($numbers, 0, $middle);
    $right = array_slice($numbers, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);  // Saca el primer elemento de $left
        } else {
            $result[] = array_shift($right); // Saca el primer elemento de $right
        }
    }

    return array_merge($result, $left, $right);

}

// Exemple d'utilisation
$numbers = [38, 27, 43, 3, 9, 82, 10];
$sortedArray = mergeSort($numbers);

print_r($sortedArray);


?>
