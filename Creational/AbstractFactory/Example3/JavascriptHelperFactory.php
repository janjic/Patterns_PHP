<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:10 PM
 */

/**
 * First implementation: creates a Javascript-based helper.
 * This is one ConcreteFactory.
 */
class JavascriptHelperFactory implements WidgetHelperAbstractFactory
{
    public function createWidgetHelper()
    {
        return new JavascriptWidgetHelper();
    }
}