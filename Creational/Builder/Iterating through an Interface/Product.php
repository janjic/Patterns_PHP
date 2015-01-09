<?php
//Product.php
class Product
{
    private $parts;
    public function __construct()
    {
        $this->parts=array();
    }

    public function assemble($segment)
    {
        array_push($this->parts,$segment);
    }

    public function display()
    {
        echo '<!DOCTYPE html><html><head><meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="builder.css">
    <title>Built by Builder</title></head><body>';
        foreach($this->parts as $piece)
        {
            echo $piece;
        }
        echo '</body></html>';
        unset($piece);
    }
}