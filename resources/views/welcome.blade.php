<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TodoList</title>
    <!-- tailwndcss -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="mx-40 my-20  py-4">
        <h1 class="text-4xl mb-5 font-mono text-center">TodoList</h1>
        @foreach ($todos as $todo)
            <div class="mx-40 p-5 grid grid-cols-3 border-2 space-x-5 bg-green-500">
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
        @endforeach
    </div>
</body>

</html>
