<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:44 PM
 */

/**
 * SECTION 2: a Client class which clones instances of BlinkingWidget.
 *
 * We cannot instantiate all the BlinkingWidgets in advance, so we need a base
 * one which will be cloned every time a new one is needed.
 */
class LoginPage
{
    private $_widget;

    public function __construct(BlinkingWidget $toClone)
    {
        $this->_widget = $toClone;
    }

    public function render()
    {
        $userId = uniqid('User ');
        // insert all the logic needed here...
        $complexBusinessLogicRules =false;
        if (true or $complexBusinessLogicRules) {
            $widget = clone $this->_widget;
            $widget->initialize("Welcome, $userId");
            return (string)$widget;
        }
    }
}