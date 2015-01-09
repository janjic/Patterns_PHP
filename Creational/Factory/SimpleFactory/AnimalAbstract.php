<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 5:35 PM
 */

/**
 * All animal should extend this abstract animal class
 */
abstract class AnimalAbstract
{
    protected $species;

    public function getSpecies() {
        return $this->species;
    }
}
