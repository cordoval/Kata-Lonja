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

    protected $distances = array(
        'Lisboa' => 600,
        'Madrid' => 800,
        'Barcelona' => 1100,
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

    public function itShouldReturnLisboaForGivenDistances()
    {
        $this->lonja->getBestPlaceWithDistances($this->price, $this->distances)->should->be('Lisboa');
    }

    public function itShouldReturnMadridForGivenDistances()
    {
        $this->distances = array(
            'Lisboa' => 6000,
            'Madrid' => 800,
            'Barcelona' => 1100,
        );
        $this->lonja->getBestPlaceWithDistances($this->price, $this->distances)->should->be('Madrid');
    }


}