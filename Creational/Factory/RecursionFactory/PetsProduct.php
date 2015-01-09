<?php
class PetsProduct implements Product
{
    private $petProduct;

    public function arrayProduct()
    {
        $this->petProduct = array(
                        'Dogs',
                        'Cats',
                        'Llamas',
                        'Turtles',
                        'Goldfish',
                        'Guinea Pigs'
                            );
        return $this->petProduct ;
    }
}