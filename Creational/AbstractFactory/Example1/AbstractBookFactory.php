<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 6:50 PM
 */

/**
 * Class AbstractBookFactory
 */
abstract class AbstractBookFactory
{
    abstract function makePHPBook();

    abstract function makeMySQLBook();
}