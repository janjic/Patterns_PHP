<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 1:20 PM
 */

/**
 * Class JavascriptWidgetHelper
 * Implementation that generates html tied to a javascript library.
 * This is one ConcreteProduct.
 */
class JavascriptWidgetHelper implements IWidgetHelper
{
    public function generateHtml($text)
    {
        return '<div dojoType="...">' . $text . '</div>';
    }
}