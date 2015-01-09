<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 1:19 PM
 */

/**
 * Interface WidgetHelper
 * **
 * SECTION 1: a WidgetHelper interface and two different implementations.
 *
 * This class purpose is to generate blinking text in spite of all
 * usability recommendations. This is the Product.
 * As always, interfaces in php may be omitted.
 */
interface IWidgetHelper
{
    /**
     * @return string
     */
    public function generateHtml($text);
}
