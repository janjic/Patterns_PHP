<?php

//Director.php
class Director
{
    private $builder;

    public function doBuild(IBuilder $buildNow)
    {
        $this->builder = $buildNow;
        $this->builder->mainHead();
        $this->builder->subHead();
        $this->builder->buildNavH();
        $this->builder->buildNavV();
        $this->builder->buildGraphic();
        $this->builder->buildVideo();
        $this->builder->buildBodyText();
    }
}

?>