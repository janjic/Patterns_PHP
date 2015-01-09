<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 9:25 PM
 */
abstract class AbstractPageDirector
{
    abstract function __construct(AbstractPageBuilder $builder_in);

    abstract function buildPage();

    abstract function getPage();
}