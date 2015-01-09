<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 1:24 PM
 */

/**
 * First subclass: creates Javascript-based helpers.
 * This is one ConcreteCreator.
 */
class JavascriptLoginPage extends LoginPage
{
    public function createWidgetHelper()
    {
        return new JavascriptWidgetHelper();
    }
}