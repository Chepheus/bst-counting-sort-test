<?php

namespace BBST\Command;

use BBST\Node;

class Insert
{
    public function doInsert(Node $new, ?Node $root)
    {
        if ($root === null)
        {
            return;
        }

        if ($new->getKey() <= $root->getKey()) {
            if ($root->getLeft() === null) {
                $root->setLeft($new);
                $new->setParent($root);
            } else {
                $this->doInsert($new, $root->getLeft());
            }
        } else {
            if ($root->getRight() === null) {
                $root->setRight($new);
                $new->setParent($root);
            } else {
                $this->doInsert($new, $root->getRight());
            }
        }
    }
}