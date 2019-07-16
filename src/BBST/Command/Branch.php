<?php

namespace BBST\Command;

use BBST\Node;

class Branch
{
    public function doBranch(?Node $node): array
    {
        if ($node === null) {
            return [];
        }

        return array_merge(
            $this->doBranch($node->getLeft()),
            [['key' => $node->getKey(), 'data' => $node->getData()]],
            $this->doBranch($node->getRight())
        );
    }
}