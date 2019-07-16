<?php

namespace BBST\Command;

use BBST\Node;

class Search
{
    public function doSearch(int $key, ?Node $node, int $step)
    {
        if ($node === null) {
            return false;
        }

        ++$step;

        if ($node->getKey() === $key) {
            echo 'Steps: ' . $step;
            return $node;
        }
        if ($node->getKey() > $key) {
            return $this->doSearch($key, $node->getLeft(), $step);
        }

        return $this->doSearch($key, $node->getRight(), $step);
    }
}