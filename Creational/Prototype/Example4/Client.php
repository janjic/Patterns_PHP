<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 10:52 PM
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

$cola = new CocaCola();

/*
 * object(CocaCola)#1 (3) {
 *   ["fizzy":"CocaCola":private]=>
 *   bool(true)
 *   ["healthy":"CocaCola":private]=>
 *   bool(false)
 *   ["tasty":"CocaCola":private]=>
 *   bool(true)
 * }
 */
var_dump($cola);

$colaClone = clone $cola;

/*
 * object(CocaCola)#2 (3) {
 *   ["fizzy":"CocaCola":private]=>
 *   bool(true)
 *   ["healthy":"CocaCola":private]=>
 *   bool(false)
 *   ["tasty":"CocaCola":private]=>
 *   bool(true)
 * }
 */
var_dump($colaClone);