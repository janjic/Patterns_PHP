<?php
interface IComponent
{
    public function showPix();
    public function add(IComponent $comOn);
    public function remove(IComponent $comGone);
    public function getChild($someInt);
}
?> 