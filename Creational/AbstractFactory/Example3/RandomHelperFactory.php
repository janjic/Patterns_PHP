<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:11 PM
 */

/**
 * Third implementation: creates a random type of helper.
 * Note that commonly the WidgetHelperAbstractFactory interface will require
 * methods to create all the helpers needed. It's up to the single
 * ConcreteFactory implementation to instantiate a family of objects
 * (flash|javascript html bindings generators) or another,
 * or even a mixture of different families or whatever.
 * Dependency Injection containers take this approach to the extreme,
 * providing automatically configurable factories for every
 * concrete class.
 */
class RandomHelperFactory implements WidgetHelperAbstractFactory
{
    public function createWidgetHelper()
    {
        srand();
        if (rand() > 0.5) {
            return new JavascriptWidgetHelper();
        } else {
            return new FlashWidgetHelper();
        }
    }
}