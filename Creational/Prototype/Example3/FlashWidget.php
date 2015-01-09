<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:44 PM
 */

/**
 * Implementation that generates html that loads a flash object.
 * This is one ConcretePrototype.
 */
class FlashWidget implements BlinkingWidget
{
    private $_objectTag;

    public function __construct(ObjectTag $objectTag)
    {
        $this->_objectTag = $objectTag;
    }

    public function initialize($text)
    {
        $this->_objectTag->setContent("<param name=\"text\">$text</param>");
    }

    public function __toString()
    {
        return (string)$this->_objectTag;
    }

    /**
     * When using the clone operator, php will perform a shallow copy of the
     * original object, duplicating references to the same collaborators.
     * Then this method will be called on the newly created object; it's time
     * to perform a cloning of the collaborators which cannot be shared with
     * the original instance.
     * This is NOT an override: it's a post-cloning hook which completes the
     * new instance substituting some shallow copies with deep ones.
     */
    public function __clone()
    {
        $this->_objectTag = clone $this->_objectTag;
    }
}