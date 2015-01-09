<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 9:32 PM
 */

/**
 * builder to create an employed female
 */
class EmployedFemaleBuilder implements PersonBuilderInterface
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
     * set gender to female
     */
    public function setGender()
    {
        $this->person->gender = Person::GENDER_FEMALE;
    }

    /**
     * set as employed
     */
    public function setEmployed()
    {
        $this->person->employed = true;
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