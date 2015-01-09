<?php

//Product.php
class Product
{
    private $parts;

    public function __construct()
    {
        $this->parts = array();
    }

    public function assemble($segment)
    {
        array_push($this->parts, $segment);
    }

    public function display()
    {
        echo '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800" height="600">';
        foreach ($this->parts as $piece) {
            echo $piece;
        }
        echo "</svg>";
        unset($piece);
    }
}

?>