<?php
class PeopleProduct implements Product
{
    private $peoProduct;
    public function arrayProduct()
    {
        $this->peoProduct = array(
                        'Jomo Kenyatta',
                        'Mustafa Kemal Ataturk',
                        'George Washington',
                        'Catherine the Great',
                        'Frederick the Great',
                        'Nelson Mandela',
                        'Alfred the Great',
                        'Mao Zedong',
                        'Napoleon Bonaparte',
                        'Mahatma Gandhi',
                        'Giuseppe Garibaldi',
                        'Ho Chi Minh'
                            );
        return $this->peoProduct ;
    }
}