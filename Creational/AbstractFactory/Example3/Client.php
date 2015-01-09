<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:11 PM
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

$page = new LoginPage(new FlashHelperFactory());
echo $page->render(), "\n";
$page = new LoginPage(new JavascriptHelperFactory());
echo $page->render(), "\n";