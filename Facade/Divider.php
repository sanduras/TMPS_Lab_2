<?php

declare (strict_types=1);

namespace StructuralPatterns\Facade;

class Divider
{
    public function divide($a, $b)
    {
        if ($b == 0) {
           echo 'Error devide by 0.';
        }
        return $a / $b;
    }
}
?>