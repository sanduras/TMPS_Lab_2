<?php

declare(strict_types=1);

namespace StructuralPatterns\Decorator;

final class TelegramDecorator extends NotifierDecorator {

    public function send(string $message): string
    {
        $message = parent::send($message);

        return " Display Telegram notification: {$message}";
    }
}
?>