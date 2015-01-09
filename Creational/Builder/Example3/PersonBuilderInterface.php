<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 9:32 PM
 */

/**
 * All people builder should implement this interface
 */
interface PersonBuilderInterface
{
    public function setGender();

    public function setEmployed();

    public function getResult();
}