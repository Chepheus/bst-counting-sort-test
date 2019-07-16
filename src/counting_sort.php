<?php

include_once 'CountingSort/counting_sort.php';

$testList = array();
foreach (range(1, 1000) as $key) {
    $testList[] = random_int(1, 2);
}
$testList = countingSort($testList);
print_r($testList);