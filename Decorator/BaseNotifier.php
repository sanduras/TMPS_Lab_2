<?php

declare(strict_types=1);

namespace StructuralPatterns\Decorator;

class BaseNotifier implements InterfaceNotifier{
    public function send(string $message): string
    {
        return $message . PHP_EOL;
    }
}
?>