<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:10 PM
 */

/**
 * SECTION 1: a WidgetHelper interface and two different implementations.
 * Normally we would inject the chosen WidgetHelper to the Client class, but
 * creating all possible helpers renders the constructor enormous, whilst we
 * are not even sure that they would be actually used.
 *
 * This class purpose is to generate blinking text in spite of all
 * usability recommendations. This is the AbstractProduct.
 */
interface WidgetHelper
{
    /**
     * @param $text
     * @return string
     */
    public function generateHtml($text);
}