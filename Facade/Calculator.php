<?php

declare (strict_types=1);

namespace StructuralPatterns\Facade;


class Calculator
{
    public function getCalculator()
    {
        return new Facade(new Adder(), new Subtractor(), new Multiplier(), new Divider());
    }
}
?>