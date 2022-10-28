<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $columns;
    public $registers;
    public $deleteRoute;
    public $editRoute;

    public function __construct($columns, $registers, $deleteRoute, $editRoute)
    {
        $this->columns = $columns;
        $this->registers = $registers;
        $this->deleteRoute = $deleteRoute;
        $this->editRoute = $editRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
