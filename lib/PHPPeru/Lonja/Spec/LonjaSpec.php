<?php

namespace PHPPeru\Lonja\Spec;

use PHPPeru\Lonja\Lonja;

class DescribeLonja extends \PHPSpec\Context
{
    protected $lonja;

    public function before()
    {
        $this->lonja = $this->spec(new Lonja());
    }

    public function itShouldIfGreaterGainInLisboaThenGoToLisboa()
    {
         $this->lonja->getBestPlaceToSell()->should->be('Lisboa');
    }
}