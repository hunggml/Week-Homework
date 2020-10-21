<?php

function sumArray($arr){
    sort($arr);
    return $arr[count($arr)-1] + $arr[count($arr)-2];
}

$arr1 = [1,10,5,20,120,-7,-10,160,0,200];
echo  sumArray($arr1);
