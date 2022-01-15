<?php

namespace App\View\Components\Todo;

use Illuminate\View\Component;

class Index extends Component
{

    public $todo; 

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($todo)
    {
        $this->todo = $todo;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.todo.index');
    }
}
