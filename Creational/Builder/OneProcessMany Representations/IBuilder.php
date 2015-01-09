<?php

//IBuilder.php
interface IBuilder
{
    public function mainHead();

    public function subHead();

    public function buildNavH();

    public function buildNavV();

    public function buildGraphic();

    public function buildVideo();

    public function buildBodyText();
}

?>