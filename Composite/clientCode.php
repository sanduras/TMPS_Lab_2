<?php
declare (strict_types=1);

namespace StructuralPatterns\Composite;


require_once '../vendor/autoload.php';

function clientCode(){
    $main_m = new Menu("Main Menu");
    
    $salt_menu = new Menu("Salts", "salts/crackers");
    $sweet_menu = new Menu("Sweets");

    $main_m->add($salt_menu);
    $main_m->add($sweet_menu);

    $drink_menu = new Menu("Drink");
    $drink_menu->add(new Leaf('Coke','/drink/coke'));
    $drink_menu->add(new Leaf('Pepsi','/drink/pepsi'));


    $ice_cream_menu = new Menu("Ice Cream");
    $ice_cream_menu->add(new Leaf('Sandra','/ice_cream/sandra'));
    $ice_cream_menu->add(new Leaf('Drancor','/ice_cream/drancor'));

    $sweet_menu->add($drink_menu);
    $sweet_menu->add($ice_cream_menu);

  

    $res = $main_m->render();
    var_dump($res);
}
clientCode();
?>