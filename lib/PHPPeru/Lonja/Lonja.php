<?php

namespace PHPPeru\Lonja;

class Lonja
{
    protected $merchandise;

    public function __construct($merchandise)
    {
        $this->merchandise = $merchandise;
    }

    public function getBestPlaceToSell($price)
    {
        $priceValue['Lisboa'] = $this->merchandise['Pulpo'] * $price['Lisboa'];
        $priceValue['Madrid'] = $this->merchandise['Pulpo'] * $price['Madrid'];
        $priceValue['Barcelona'] = $this->merchandise['Pulpo'] * $price['Barcelona'];
        $maxPrice = max($priceValue);
        foreach ($priceValue as $key => $value) {
            if($maxPrice == $value) {
                return $key;
            }
        }
    }
}
