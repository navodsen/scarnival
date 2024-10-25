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
                background-color: green
            }

            .c0:hover {
                background-color: lime;
            }

            .c1 {
                background-color: red
            }

            .c1:hover {
                background-color: orange;
            }
        </style>
    </head>

    <body class="font-pops antialiased bg-gradient-to-b from-zinc-950 to-black text-white">
        <div id="dConfirm" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 w-screen md:w-1/2 xl:w-1/3">
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                    <h3 id="popTitle" class="text-base font-semibold leading-6 text-gray-900" id="modal-title"></h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button id="yBtn" type="button" onclick="bookun()" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Confirm</button>
                            <button id="nBtn" type="button" onclick="cancel()" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-4 mx-4 grid grid-cols-[repeat(15,minmax(0,1fr))] gap-1 text-xs font-semibold">
            @foreach ($tables as $table)
                <div id="div{{$table->id}}" onclick="confirm({{ $table->id }},{{$table->active}})" class="c{{ $table->active }} bg-white w-1/15 h-9 rounded-md cursor-pointer flex justify-center items-center">
                    {{ $table->id }}
                </div>                
            @endforeach
        </div>
        <div class="row-span-1 flex lg:col-span-1 lg:row-span-2 lg:h-[95svh] lg:mt-4">
        </div>
        <script>
            let tableId = null;
            let tableState = null;

            function cancel() {
                const popup = document.getElementById("dConfirm");
                popup.classList.toggle('hidden'); // hiding
                document.getElementById('yBtn').innerText = "Confirm";
            }

            function confirm(id, active) {
                tableId = id;
                tableState = active;
                const title = document.getElementById("popTitle");
                if (tableState == 0) {
                    title.innerText = "Book Table : " + tableId;
                } else {
                    title.innerText = "Drop Table : " + tableId;;
                }
                const popup = document.getElementById("dConfirm");
                popup.classList.toggle('hidden'); // making it visible
            }

            // function bookun() {
            //     if (tableId !== null && tableState !== null) {
            //         // Make AJAX call to update the table in the DB
            //         fetch('/update-table', {
            //             method: 'POST',
            //             headers: {
            //                 'Content-Type': 'application/json',
            //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
            //             },
            //             body: JSON.stringify({ id: tableId, active: tableState })
            //         })
            //         .then(response => response.json())
            //         .then(data => {
            //             // Refresh the table view based on returned data
            //             console.log(data);
                        
            //             updateTables(data.tables);
            //             document.getElementById('dConfirm').classList.toggle('hidden');
            //         })
            //         .catch(error => {
            //             console.error('Errorlogger:', error);
            //             document.getElementById('yBtn').innerText = "Error Occured";
            //         })
            //     }
            // }

            function bookun() {
                if (tableId !== null && tableState !== null) {
                    // Make AJAX call to update the table in the DB
                    fetch('/update-table', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ id: tableId, active: tableState })
                    })
                    .then(response => {
                        if (!response.ok) {
                            // If response is not OK, throw an error with the status
                            throw new Error(`HTTP error! Status: ${response.status}`);
                        }
                        return response.json();  // Parse the response JSON
                    })
                    .then(data => {
                        // Refresh the table view based on returned data
                        console.log(data);
                        
                        if (data && data.tables) {
                            updateTables(data.tables);  // Update tables if data exists
                            document.getElementById('dConfirm').classList.toggle('hidden');
                        } else {
                            console.error('Invalid data structure:', data);
                            document.getElementById('yBtn').innerText = "Data error";
                        }
                    })
                    .catch(error => {
                        // Improved error handling
                        console.error('Errorlogger:', error);
                        document.getElementById('yBtn').innerText = "Error Occurred";
                    });
                } else {
                    console.error('Invalid tableId or tableState');
                }
            }


            function updateTables(tables) {
                tables.forEach(table => {
                    let tableDiv = document.getElementById('div' + table.id);
                    if (table.active == 1) {
                        tableDiv.classList.remove('c0');
                        tableDiv.classList.add('c1');
                    } else {
                        tableDiv.classList.remove('c1');
                        tableDiv.classList.add('c0');
                    }
                    tableDiv.setAttribute('onclick','confirm('+ table.id +','+ table.active +')');
                });
            }
        </script>
    </body>
</html>