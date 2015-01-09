<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:10 PM
 */

/**
 * Implementation that generates html tied to a javascript library.
 * This is one ConcreteProduct.
 */
class JavascriptWidgetHelper implements WidgetHelper
{
    public function generateHtml($text)
    {
        return '<div dojoType="...">' . $text . '</div>';
    }
}