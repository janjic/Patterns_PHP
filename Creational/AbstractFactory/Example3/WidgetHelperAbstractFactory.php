<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:10 PM
 */

/**
 * SECTION 2: since we are not going to pass the instances of WidgetHelper to
 * the Client class (because they do not exist yet), we need an interface
 * for the creator of these WidgetHelpers, which results in an Abstract Factory.
 * This is the collaborator which would be injected in the client.
 */
interface WidgetHelperAbstractFactory
{
    /**
     * @return WidgetHelper
     */
    public function createWidgetHelper();
}