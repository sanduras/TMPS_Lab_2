<?php

declare(strict_types=1);

namespace StructuralPatterns\Decorator;

interface InterfaceNotifier {
    public function send(string $message): string;
}
?>