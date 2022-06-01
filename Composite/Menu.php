<?php
declare (strict_types=1);

namespace StructuralPatterns\Composite;

class Menu extends MenuComposite {

    private array $menu_components;
    private string $title;
    public function __construct( $title)
    {
        $this->title = $title;
        $this->menu_components = [];
    }

    public function add(MenuComposite $menu_component) {
        $this->menu_components[] = $menu_component;
    }

    public function render() : string {
        $result = PHP_EOL . $this->title . PHP_EOL;
        foreach ($this->menu_components as $menu_component) {
            $result .= $menu_component->render();
        }
        return $result . PHP_EOL;
    }
}