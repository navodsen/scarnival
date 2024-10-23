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

    </head>
    <body class="font-pops antialiased bg-gradient-to-b from-zinc-950 to-black text-white">
        <form action="#" class="mx-4 my-6">
            <input id="search" placeholder="Search" onchange="search()" class="text-sm w-full rounded-3xl px-4 py-2 bg-transparent bg-gradient-to-br from-[#ffffff5b] to-[#ffffff30]" type="text" />
        </form>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>T</th>
                <th>Name</th>
                <th>Phone</th>
                <th>T</th>
            </tr>
            <tr>
                <td>001</td>
                <td>Navod Senarathne</td>
                <td>076 123 2727</td>
                <td>8</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>001</td>
                <td>Ruvin Perera</td>
                <td>076 123 3877</td>
                <td>3</td>
                <td>Navod Senarathne</td>
                <td>076 123 2727</td>
                <td>5</td>
            </tr>
        </table>
        <script>
            function search() {

            }

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