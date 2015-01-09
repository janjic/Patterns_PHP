<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 9:32 PM
 */

/**
 * builder to create an employed male
 */
class EmployedMaleBuilder implements PersonBuilderInterface
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