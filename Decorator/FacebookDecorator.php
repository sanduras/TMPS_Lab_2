<?php

declare(strict_types=1);

namespace StructuralPatterns\Decorator;

final class FacebookDecorator extends NotifierDecorator {

    public function send(string $message): string
    {
        $message = parent::send($message);

        return " Display Facebook notification: {$message}";
    }
}
?>