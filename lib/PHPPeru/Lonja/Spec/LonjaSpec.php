<?php

namespace PHPPeru\Parenthesis;

use PHPPeru\Lonja\Lonja;

class DescribeLonja extends \PHPSpec\Context
{
    protected $lonja;

    public function before()
    {
        $this->lonja = $this->spec(new Lonja());
    }
}