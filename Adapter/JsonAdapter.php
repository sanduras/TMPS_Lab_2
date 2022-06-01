<?php
declare (strict_types=1);
namespace StructuralPatterns\Adapter;

class JsonAdapter implements ClientInterface {
    private JsonReport $report;
    public function __construct(JsonReport $report)
    {
        $this->report = $report;
    }

    public function getData(): array
    {
        $data = $this->report->buildJson();
        return json_decode($data, true);
    }
}
?>