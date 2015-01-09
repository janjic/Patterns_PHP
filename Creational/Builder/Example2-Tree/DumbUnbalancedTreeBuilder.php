<?php

/**
 * ConcreteBuilder. You can extract an interface TreeBuilder, based on
 * its three public methods, if there are multiple implementations of this
 * participant.
 * This class encapsulates the necessary logic to insert new subtrees
 * in the right points, maintaining the ordering between values (in-order
 * representation).
 */
class DumbUnbalancedTreeBuilder
{
    private $_tree;

    public function reset()
    {
        $this->_tree = null;
    }

    public function addNumber($number)
    {
        $this->_tree = $this->_addTo($this->_tree, $number);
    }

    private function _addTo(Tree $tree = null, $number)
    {
        if ($tree === null) {
            $tree = new Tree($number);
            echo $tree->dump(), "<br>";
            return $tree;
        }



        if ($number < $tree->getValue()) {
            $tree->setLeft($this->_addTo($tree->getLeft(), $number));
            // echo $tree->dump(), "<br>";
        } else {
            $tree->setRight($this->_addTo($tree->getRight(), $number));
            //echo $tree->dump(), "<br>";
        };
        echo "tree".$tree->dump(), "<br>";
        return $tree;
    }

    public function getTree()
    {
        return $this->_tree;
    }
}