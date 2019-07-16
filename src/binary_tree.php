<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'BBST/Data.php';
include_once 'BBST/Node.php';
include_once 'BBST/Command/Insert.php';
include_once 'BBST/Command/Branch.php';
include_once 'BBST/Command/Display.php';
include_once 'BBST/Command/Search.php';
include_once 'BBST/BalancedBinaryTree.php';

$tree = new \BBST\BalancedBinaryTree();
$range = range(1, 100);
shuffle($range);

foreach ($range as $item)
{
    $node = new \BBST\Node($item, new \BBST\Data(
        uniqid('name', true),
        uniqid('city', true),
        random_int(1950, 1990))
    );

    $tree->insert($node);
}


echo $tree->searchByKey(24)->display();
echo '<br>';
$tree->balance();
echo $tree->searchByKey(24)->display();