<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 9:33 PM
 */

/**
 * The director class is part of the builder patter, the build method should be passed a builder.
 * The build method should than call all of the builder methods and return a Person object
 */
class PersonDirector
{
    public function build(PersonBuilderInterface $builder)
    {
        $builder->setGender();
        $builder->setEmployed();

        return $builder->getResult();
    }
}
