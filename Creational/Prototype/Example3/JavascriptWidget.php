<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:43 PM
 */

/**
 * Implementation that generates html tied to a javascript library.
 * This is one ConcretePrototype.
 */
class JavascriptWidget implements BlinkingWidget
{
    private $_text;
    public function initialize($text)
    {
        $this->_text = $text;
    }

    public function __toString()
    {
        return '<div dojoType="...">' . $this->_text . '</div>';
    }
}