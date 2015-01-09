<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 1:25 PM
 */

/**
 * Second subclass: creates Flash-based helpers.
 * This is one ConcreteCreator.
 */
class FlashLoginPage extends LoginPage
{
    public function createWidgetHelper()
    {
        return new FlashWidgetHelper();
    }
}