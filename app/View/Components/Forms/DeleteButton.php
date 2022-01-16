<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class DeleteButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public function __construct($id)
    {
    $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <form action="todo/{{ $id }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="p-1 bg-red-500" type="submit"><x-carbon-delete class="w-8 h-8"/></button>
</form>
</div>
blade;
    }
}
