<?php
//Director.php
class Director
{
    private $builder;
    private $builder_methods;
    public function doBuild(IBuilder $buildNow)
    {
        $this->builder=$buildNow;
        $this->builder_methods=get_class_methods('IBuilder');
        foreach($this->builder_methods as $part)
        {
            $this->builder->$part();
        }
    }
}