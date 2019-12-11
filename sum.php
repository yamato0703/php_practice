<?php
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";

 function double($num) {
    $output = $num * 2;
    return $output;
}

$double = double(10);
echo $double;
echo "\n";


 function f($a, $b){
    $result = $a + $b;
    return $result;
}
$f = f(2, 10);
echo $f;
echo "\n";

function sample($arr){ 
    $result = 1;
    foreach ($arr as $val){
        $result = $val * $result;
    }
    return $result;
}
$arr = array(1, 3, 5, 7, 9);
echo sample($arr);
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
$arr = array(7, 8, 9, 10);
echo max_array($arr);
echo "\n";