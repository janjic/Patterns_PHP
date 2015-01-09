<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 9:31 PM
 */

/**
 * An extremely basic class for creating people objects
 */
class Person
{
    /**
     * is the person employed
     * @var bool
     */
    public $employed;

    /**
     * is the person male or female
     * @var string
     */
    public $gender;

    /**
     * @const used for define a person of gender male
     */
    const GENDER_MALE = "Male";

    /**
     * @const used for define a person of gender female
     */
    const GENDER_FEMALE = "Female";

}