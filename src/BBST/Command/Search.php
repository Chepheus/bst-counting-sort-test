<?php

namespace BBST\Command;

use BBST\Node;

class Search
{
    public function doSearch(int $key, ?Node $node)
    {
        if ($node === null) {
            return false;
        }

        if ($node->getKey() === $key) {
            return $node;
        }
        if ($node->getKey() > $key) {
            return $this->doSearch($key, $node->getLeft());
        }

        return $this->doSearch($key, $node->getRight());
    }
}