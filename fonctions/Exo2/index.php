<?php
function average(array $arr) : float {
    $summ = 0;
    for($i = 0; $i < count($arr); $i++){
       $summ += $arr[$i];
    }
    return $summ / count($arr);
}
echo average([12, 15, 18, 9]) . "<br>";
echo average([12, 15, 18, 11, 14]) . "<br>";
?>