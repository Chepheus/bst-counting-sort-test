<?php

include_once 'CountingSort/counting_sort.php';

$testList = [];
foreach (range(1, 2) as $key) {
    $testList[] = random_int(1, 100000);
}
$testList = countingSort($testList);
print_r($testList);