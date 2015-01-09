<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 1:22 PM
 */

/**
 * Implementation that generates html that loads a flash object.
 * This is one ConcreteProduct.
 */
class FlashWidgetHelper implements IWidgetHelper
{
    public function generateHtml($text)
    {
        return '<object>
        <param name="text">' . $text . '</param>
        </object>';
    }
}