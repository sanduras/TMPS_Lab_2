<?php
declare (strict_types=1);


namespace StructuralPatterns\Decorator;

require_once '../vendor/autoload.php';

const Message = 'This is text notification!';

$baseNotifier = new BaseNotifier();

$tlNotifier = new TelegramDecorator($baseNotifier);
$fbNotifier = new FacebookDecorator($baseNotifier);

echo $tlNotifier->send(Message);
echo $fbNotifier->send(Message);
?>