<?php 

function aVeryBigSum($ar){
    return array_sum($ar);
}

$ar = [1000000001,1000000002,1000000003,1000000004,1000000005];

print(aVeryBigSum($ar));

?>