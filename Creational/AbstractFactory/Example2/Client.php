<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:04 PM
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

$mgr = new MegaCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();