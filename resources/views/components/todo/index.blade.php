
<div>
    <!-- He who is contented is rich. - Laozi -->

    <div class="mx-40 p-5 grid grid-cols-3 border-2 text-white space-x-5 bg-green-600">
        @if ($todo->completed !== 0)
            <div class=""><input type="checkbox" checked value={{ $todo->id }}
                class="" name="del" id=""></div> @else
            <div class="">
                <input type="checkbox" value={{ $todo->id }} class="" name="del" id="">
            </div>
        @endif

        @if ($todo->completed !== 0)
            <div class="justify-self-start">
                <p class='line-through'>{{ $todo->title }}</p>
            </div>
        @else
            <div class="justify-self-start">
                <p class=''>{{ $todo->title }}</p>
            </div>
        @endif
        <div class="justify-self-end">
            <form action="todo/{{ $todo->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="p-1 bg-red-500" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>