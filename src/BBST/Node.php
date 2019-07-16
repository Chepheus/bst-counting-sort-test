<?php

namespace BBST;

class Node
{
    protected $_parent;
    protected $_left;
    protected $_right;
    protected $_key;
    protected $_data;

    /**
     * @param int $key
     * @param Data $data
     */
    public function __construct(int $key, Data $data)
    {
        $this->_key = $key;
        $this->_data = $data;
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return '<br/>'
            . 'Name: ' . $this->_data->getName()
            . '<br />'
            . 'City: ' . $this->_data->getCity()
            . '<br />'
            . 'Birthday: ' . $this->_data->getYear();
    }

    public function getParent(): Node
    {
        return $this->_parent;
    }

    public function setParent(Node $parent): void
    {
        $this->_parent = $parent;
    }

    public function getLeft(): ?Node
    {
        return $this->_left;
    }

    public function setLeft(Node $left): void
    {
        $this->_left = $left;
    }

    public function getRight(): ?Node
    {
        return $this->_right;
    }

    public function setRight(Node $right): void
    {
        $this->_right = $right;
    }

    public function getKey(): int
    {
        return $this->_key;
    }

    public function setKey(int $key): void
    {
        $this->_key = $key;
    }

    public function getData(): Data
    {
        return $this->_data;
    }

    public function setData(Data $data): void
    {
        $this->_data = $data;
    }
}