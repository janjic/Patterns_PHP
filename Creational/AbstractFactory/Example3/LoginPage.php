<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:11 PM
 */

/**
 * SECTION 3: a Client class that uses an AbstractFactory to create Widget
 * instances whenever it wants.
 * Note that this class only depends on abstractions (AstractFactory and its
 * AbstractProduct). However, since php has no compile-time dependencies,
 * an interface for the Products or the Factories is not mandatory.
 */
class LoginPage
{
    private $_widgetHelperFactory;

    public function __construct(WidgetHelperAbstractFactory $factory)
    {
        $this->_widgetHelperFactory = $factory;
    }

    public function render()
    {
        $userId = uniqid('User ');

        // insert all the logic needed here...
        $complexBusinessLogicRules = false;
        if (true or $complexBusinessLogicRules) {
            $helper = $this->_widgetHelperFactory->createWidgetHelper();
            return $helper->generateHtml("Welcome, $userId");
        }
    }
}