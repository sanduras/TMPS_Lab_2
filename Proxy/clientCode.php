<?php
declare (strict_types=1);
namespace StructuralPatterns\Proxy;


require_once '../vendor/autoload.php';

function clientCode(){ 
 $filename = "image.png";

 $image2 = new ProxyImage($filename);
 echo $image2->display();
 echo $image2->display();
}

clientCode();