<?php

namespace BBST\Command;

use BBST\Node;

class Display
{
    public function doDisplay(?Node $node): string
    {
        if ($node === null) {
            return '';
        }

        return $this->doDisplay($node->getLeft()) . ' '
            . $node->getKey() . ' '
            . $this->doDisplay($node->getRight());
    }
}