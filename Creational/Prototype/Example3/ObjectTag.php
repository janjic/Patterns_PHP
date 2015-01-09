<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:44 PM
 */

/**
 * A collaborator for the next ConcretePrototype.
 */
class ObjectTag
{
    private $_html;

    public function setContent($html)
    {
        $this->_html = $html;
    }

    public function __toString()
    {
        return "<object>{$this->_html}</object>\n";
    }
}