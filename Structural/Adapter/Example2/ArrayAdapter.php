<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 11:35 PM
 */

/**
 * The Adaptee is not a class but an array.
 * This is the Adapter. Adapters for procedural structures are common in php,
 * much more than for classes. If it composed an object instead of an array
 * it would still be an implementation of the Adapter pattern.
 */
class ArrayAdapter implements Collection
{
    private $_array;

    public function __construct(array $array)
    {
        $this->_array = $array;
    }

    public function add($element)
    {
        $this->_array[] = $element;
    }

    /**
     * @return boolean
     */
    public function contains($element)
    {
        return in_array($element, $this->_array);
    }

    public function remove($element)
    {
        $index = array_search($element, $this->_array);
        if ($index !== false) {
            unset($this->_array[$index]);
        }
    }

    public function getIterator()
    {
        return new ArrayIterator($this->_array);
    }
}