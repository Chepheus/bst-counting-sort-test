<?php

/**
 * @param array $arr
 * @return array
 */
function countingSort(array $arr) {
    $count = [];
    foreach ($arr as $item) {
        $count[$item] = isset($count[$item]) ? ($count[$item] + 1) : 1; //Increase the counter if exists or initialize with '1'
    }
    $sortedArray = [];
    $minVal = min($arr); // If the min value of the array given, this line can be removed
    $maxVal = max($arr); //If the max value of the array given, this line can be removed
    for ($i = $minVal; $i <= $maxVal; $i++) { //based on the frequency, building the new sorted array
        if(isset($count[$i])) {
            while ($count[$i]-- > 0) {
                $sortedArray[] = $i;
            }
        }
    }
    return $sortedArray;
}
