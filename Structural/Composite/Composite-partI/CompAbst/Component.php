<?php
abstract class Component
{
    public abstract function operation();
    public abstract function add(Component $comOn);
    public abstract function remove(Component $comGone);
    public abstract function getChild($someInt);
    
}
?> 