<?php
/**
 * Created by PhpStorm.
 * User: janjic
 * Date: 1/7/2015
 * Time: 5:36 PM
 */

/**
 * The is the factory which creates animal objects
 */
class AnimalFactory
{

    /**
     * @param $animal
     * @return Cat|Dog
     * @throws Exception
     *
     * In the Factory pattern, the simple factory is often declared statically (as is the case in Larry Ullman’s book),
     * but in the Factory Method pattern, the factoryMethod() method is declared as an abstract one that can be overridden.
     * The reason for that is flexibility. A single concrete creator is instantiating a single concrete product. However,
     * you can have several different concrete factories requiring different implementations of the factoryMethod().
     */
    public static function factory($animal)
    {
        switch ($animal) {
            case 'cat':
                $obj = new Cat();
                break;
            case 'dog':
                $obj = new Dog();
                break;
            default:
                throw new Exception("Animal factory could not create animal of species '" . $animal . "'", 1000);
        }
        return $obj;
    }
}