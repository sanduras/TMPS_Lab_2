<?php
declare (strict_types=1);

namespace StructuralPatterns\Adapter;

require_once '../vendor/autoload.php';

$reports = [
    new JsonReport(),
    new ArrayReport(),
     
];

function clientCode(array $reports): void {
    foreach($reports as $report ) {
        if ($report instanceof ArrayReport) {
            $adapter = $report;
        }
        elseif ($report instanceof JsonReport) {
            $adapter = (new JSonAdapter($report));
        }
        elseif ($report instanceof XMLReport) {
            $adapter = (new XMLAdapter($report));
        }
        renderView($adapter);
    }
}

function renderView(ClientInterface $adapter):void {
    print_r($adapter->getData());
}
clientCode($reports);

?>