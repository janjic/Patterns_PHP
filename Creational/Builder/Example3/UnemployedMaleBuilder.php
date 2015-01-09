<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 9:32 PM
 */

class UnemployedMaleBuilder implements PersonBuilderInterface
{
    private $person;

    /**
     * create person
     */
    public function __construct()
    {
        $this->person = new Person();
    }

    /**
     * set gender to male
     */
    public function setGender()
    {
        $this->person->gender = Person::GENDER_MALE;
    }

    /**
     * set as unemployed
     */
    public function setEmployed()
    {
        $this->person->employed = false;
    }

    /**
     * return the Person
     * @return self
     */
    public function getResult()
    {
        return $this->person;
    }
}