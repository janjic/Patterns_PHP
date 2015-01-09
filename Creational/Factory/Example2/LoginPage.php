<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 1:23 PM
 */
/**
 * SECTION 2: a Creator class which defines a seam to change the object it
 * creates during execution.
 *
 * Normally we would inject the chosen WidgetHelper to the Client class, but
 * since WidgetHelpers are created during the execution (basing on business
 * logic) we cannot instantiate them in advance and so we need an abstraction
 * on the creation process to allow reusing and overriding: the Factory Method
 * createWidgetHelper().
 */
abstract class LoginPage
{
    /**
     * @return WidgetHelper
     */
    public abstract function createWidgetHelper();

    /**
     * A Template Method which uses the Factory Method.
     */
    public function render()
    {
        $userId = uniqid('User ');
        // insert all the logic needed here...
        $complexBusinessLogicRules =true;
        if (true or $complexBusinessLogicRules) {
            $helper = $this->createWidgetHelper();
            return $helper->generateHtml("Welcome, $userId");
        }
    }
}