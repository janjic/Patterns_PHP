<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:10 PM
 */

/**
 * Implementation that generates html that loads a flash object.
 * This is one ConcreteProduct.
 */
class FlashWidgetHelper implements WidgetHelper
{
    public function generateHtml($text)
    {
        return '<object>
        <param name="text">' . $text . '</param>
        </object>';
    }
}