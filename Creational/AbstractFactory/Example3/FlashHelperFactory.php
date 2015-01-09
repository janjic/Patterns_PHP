<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:11 PM
 */

/**
 * Second implementation: creates a Flash-based helper.
 * This is one ConcreteFactory.
 */
class FlashHelperFactory implements WidgetHelperAbstractFactory
{
    public function createWidgetHelper()
    {
        return new FlashWidgetHelper();
    }
}