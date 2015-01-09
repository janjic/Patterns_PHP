<?php
class ToolProduct implements Product
{
    private $toolProduct;
    public function arrayProduct()
    {
        $this->toolProduct = array(
                        'Hammer',
                        'Screwdriver',
                        'Saw',
                        'Wrench',
                        'Awl',
                        'Pliers',
                        'Clamp'
                            );
        return $this->toolProduct ;
    }
}