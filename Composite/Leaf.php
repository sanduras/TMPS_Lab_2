<?php
declare (strict_types=1);

namespace StructuralPatterns\Composite;

class Leaf extends MenuComposite {

    private string $link;
    private string $title;
   public function __construct(string $title, string $link)
    {
        $this->link = $link;
        $this->title = $title;
    }

    public function render() : string {
        return "<a href='{$this->link}'>{$this->title}</a>";
    }
}
?>