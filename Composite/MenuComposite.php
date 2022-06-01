<?php
declare (strict_types=1);

namespace StructuralPatterns\Composite;

abstract class MenuComposite {

    abstract public function render() : string;
}
?>