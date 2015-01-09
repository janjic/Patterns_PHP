<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 9:33 PM
 */

/**
 * @param $class_name
 * @throws Exception
 */
function __autoload($class_name)
{
    if (file_exists($class_name . '.php'))
    {
        require_once($class_name . '.php');
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}

$director = new PersonDirector();
$employedMaleBuilder = new EmployedMaleBuilder();
$unemployedMaleBuilder = new UnemployedMaleBuilder();
$employedFemaleBuilder = new EmployedFemaleBuilder();
$unemployedFemaleBuilder = new UnemployedFemaleBuilder();

/**
 * object(Person)#3 (2) {
 * (
 *   ["employed"] => bool(true)
 *   ["gender"] => string(4) "Male"
 * )
 */
$employedMale = $director->build($employedMaleBuilder);
var_dump($employedMale);
/**
 * object(Person)#5 (2) {
 * (
 *   ["employed"] => bool(false)
 *   ["gender"] => string(4) "Male"
 * )
 */
$unemployedMale = $director->build($unemployedMaleBuilder);
var_dump($unemployedMale);
/**
 * object(Person)#7 (2) {
 * (
 *   ["employed"] => bool(true)
 *   ["gender"] => string(4) "Female"
 * )
 */
$employedFemale = $director->build($employedFemaleBuilder);
var_dump($employedFemale);
/**
 * object(Person)#11 (2) {
 * (
 *   ["employed"] => bool(false)
 *   ["gender"] => string(4) "Female"
 * )
 */
$unemployedFemale = $director->build($unemployedFemaleBuilder);
var_dump($unemployedFemale);