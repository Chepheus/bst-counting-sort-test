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

$node1 = new \BBST\Node(24, new \BBST\Data('Anton', 'Kiev', 1994));
$node2 = new \BBST\Node(29, new \BBST\Data('Petr', 'Moscow', 1990));
$node3 = new \BBST\Node(43, new \BBST\Data('Boris', 'London', 1976));
$node4 = new \BBST\Node(28, new \BBST\Data('Dmitry', 'Paris', 1991));

$tree = new \BBST\BalancedBinaryTree();
$tree->insert($node1);
$tree->insert($node2);
$tree->insert($node3);
$tree->insert($node4);


echo $tree->display();
echo $tree->searchByKey(24)->display();
$tree->balance();
echo $tree->searchByKey(43)->display();