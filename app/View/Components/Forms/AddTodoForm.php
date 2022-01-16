<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class AddTodoForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div class="flex"> 
    <!-- He who is contented is rich. - Laozi -->
    <form action="todo/add" method="POST">
    @csrf
    @method('POST')
    <input type="text" class=" w-80 p-2 mx-80 border-4 border-black my-5" name="title" id="">
    <button class="p-2 bg-green-500" -mr-30 type="submit"><x-carbon-add class="w-8 h-8"/></button>
</form>
</div>
blade;
    }
}
