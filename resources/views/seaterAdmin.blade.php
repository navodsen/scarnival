<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scarnival - Agastra Events</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')

        <script>
            var tables = @json($tables);
        </script>

        <style>
            .c0 {
                color:green
            }
            .c1 {
                color:red
            }
        </style>

    </head>
    <body class="font-pops antialiased bg-gradient-to-b from-zinc-950 to-black text-white">
        <div class="grid grid-cols-[repeat(15,minmax(0,1fr))] gap-4">
            @foreach ($tables as $table)
                <div class="c{{ $table->active }} border-white border w-fit">
                    {{ $table->id }}
                </div>                
            @endforeach
        </div>
        <script>
            // function seater() {
            //     tables.forEach(table => {
            //         if (table.active == 1) {
            //             document.getElementById('rect'+ table.id).classList.add('sold');
            //             document.getElementById('rect'+ table.id).classList.remove('cls-1');
            //         }
            //     });
            // }
        </script>
    </body>
</html>