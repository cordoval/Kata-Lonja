<?php

namespace PHPPeru\Lonja\Spec;

use PHPPeru\Lonja\Lonja;

class DescribeLonja extends \PHPSpec\Context
{
    protected $lonja;

    protected $price = array(
        'Lisboa' => 600,
        'Madrid' => 500,
        'Barcelona' => 450,
    );

    public function before()
    {
        $merchandise = array(
            'Pulpo' => 100,
        );

        $this->lonja = $this->spec(new Lonja($merchandise));
    }

    public function itShouldReturnLisboaForPulpo()
    {
         $this->lonja->getBestPlaceToSell($this->price)->should->be('Lisboa');
    }

    //public function itShould
}