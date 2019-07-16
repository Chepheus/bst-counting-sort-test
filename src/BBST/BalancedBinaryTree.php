<?php

namespace BBST;

class BalancedBinaryTree
{
    /**
     * @var Node
     */
    private $_root;

    private $insertCommand;
    private $searchCommand;
    private $displayCommand;
    private $branchCommand;

    public function __construct()
    {
        $this->insertCommand = new Command\Insert();
        $this->searchCommand = new Command\Search();
        $this->displayCommand = new Command\Display();
        $this->branchCommand = new Command\Branch();
    }

    /**
     *
     */
    public function balance(): void
    {
        // make a list out of the tree
        $list = $this->branchCommand->doBranch($this->_root);

        // find the medium! Because the list is ordered
        // we can find the middle element in various ways
        $chunks = array_chunk($list, ceil(count($list) / 2));
        $mid = array_pop($chunks[0]);

        // empty the tree
        $this->_root = null;

        // insert the root
        $node = new Node($mid['key'], $mid['data']);
        $this->insert($node);

        if (array_key_exists(0, $chunks)) {
            $this->_balance($chunks[0]);
        }

        if (array_key_exists(1, $chunks)) {
            $this->_balance($chunks[1]);
        }
    }

    /**
     * @param Node $newNode
     */
    public function insert(Node $newNode): void
    {
        $this->insertCommand->doInsert($newNode, $this->_root);

        if ($this->_root === null)
        {
            $this->_root = $newNode;
        }
    }

    /**
     * @param int $key
     * @return Node|bool
     */
    public function searchByKey(int $key)
    {
        return $this->searchCommand->doSearch($key, $this->_root);
    }

    /**
     * @return string
     */
    public function display(): string
    {
        if ($this->_root === null) {
            return 'The tree is empty!';
        }

        return $this->displayCommand->doDisplay($this->_root->getLeft()) . ' '
            . $this->_root->getKey() . ' '
            . $this->displayCommand->doDisplay($this->_root->getRight());
    }

    /**
     * @param Node[] $list
     */
    private function _balance(array $list): void
    {
        if (empty($list)) {
            return;
        }

        // split the list
        $chunks = array_chunk($list, ceil(count($list) / 2));
        $mid = array_pop($chunks[0]);

        $node = new Node($mid['key'], $mid['data']);
        $this->insert($node);

        if (isset($chunks[0])) {
            $this->_balance($chunks[0]);
        }

        if (isset($chunks[1])) {
            $this->_balance($chunks[1]);
        }
    }
}