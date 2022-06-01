<?php

declare (strict_types=1);

namespace StructuralPatterns\Facade;

class Facade {

    public function __construct(Adder $adder, Subtractor $subtractor, Multiplier $multiplier,Divider $divider)
    {
        $this->_adder = $adder;
        $this->_subtractor = $subtractor;
        $this->_multiplier = $multiplier;
        $this->_divider = $divider;
    }

    public function calculate($expression)
    {
        list ($a, $operator, $b) = explode(' ', $expression);
        switch ($operator) {
            case '+':
                return $this->_adder->add($a, $b);
                break;
            case '-':
                return $this->_subtractor->subtract($a, $b);
                break;
            case '*':
                return $this->_multiplier->multiply($a, $b);
                break;
            case '/':
                return $this->_divider->divide($a, $b);
                break;
        }
    }
}

?>