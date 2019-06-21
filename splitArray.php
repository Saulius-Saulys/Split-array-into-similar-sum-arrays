<?php

$arr = array(1,2,4,7,1,6,2,8);
sort($arr);

$set1 = array((1+sizeof($arr))/2);
$set2 = array((1+sizeof($arr))/2);

function divideIntoNearlyEqual($arr, $set1, $set2){
    $setSize = 1+sizeof($arr)/2;

    $pos1 = 0;
    $pos2 = 0;

    $i = sizeOf($arr) - 1;
    $sum1 = 0;
    $sum2 = 0;

    while ($pos1 < $setSize && $pos2 < $setSize){
        if($sum1 < $sum2){
            $set1[$pos1] = $arr[$i];
            $pos1++;
            $sum1 += $arr[$i];
        }else
        {
            $set2[$pos2] = $arr[$i];
            $pos2++;
            $sum2 += $arr[$i];
        }
        $i--;
        echo '<br>';
    }

    while ($i>=0)
    {
        if ($pos1 < $setSize)
            $set1[$pos1++] = $arr[$i];
        else
            $set2[$pos2++] = $arr[$i];
        $i--;
    }
    printArraysWithSums($arr);
    printArraysWithSums($set1);
    printArraysWithSums($set2);

}
function printArraysWithSums($arr){
    $sum = 0;
        for ($i=0; $i<sizeof($arr); $i++)
        {
            $sum += $arr[$i];
            echo $arr[$i] . " , ";
        }
        echo " = " . $sum . '<br>';
}
divideIntoNearlyEqual($arr, $set1, $set2);

?>