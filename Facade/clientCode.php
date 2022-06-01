<?php
declare (strict_types=1);

namespace StructuralPatterns\Facade;

require_once '../vendor/autoload.php';

function clientCode(){
    $calculatorFactory = new Calculator;
    $calculator = $calculatorFactory->getCalculator();
    echo '22 + 14 = ', $calculator->calculate('22 + 14'), "\n";
    echo '91 / 3 = ', $calculator->calculate('91 / 3'), "\n";
}
clientCode();
?>