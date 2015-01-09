<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 1:25 PM
 */

/**
 * @param $class_name
 * @throws Exception
 */
function __autoload($class_name)
{
    if (file_exists($class_name . '.php')) {
        require_once($class_name . '.php');
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}
$page = new FlashLoginPage();
echo $page->render(), "\n";
$page = new JavascriptLoginPage();
echo $page->render(), "\n";