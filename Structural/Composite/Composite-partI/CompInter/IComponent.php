<?php
interface IComponent
{
    public function operation();
    public function add(IComponent $comOn);
    public function remove(IComponent $comGone);
    public function getChild($someInt);
}
?> 