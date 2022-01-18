<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            @foreach ($cars as $car)
            <div class="p-10">  
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/mountain.jpg" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $car->merk }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $car->type }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $car->category->name }}</span>
                    <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="/car/{{ $car->id }}">Check auto</a></span>
                </div>
                </div>
            </div>
            @endforeach
        </div>
            
            {{-- <a href="/dashboard">Dashboard</a>
            <table>
                <tr>
                    <th>Merk</th>
                    <th>Type</th>
                    <th>Category</th>
                </tr>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->merk }}</td>
                        <td>{{ $car->type }}</td>
                        <td>{{ $car->category->name }}</td>
                        <td><a href="/car/{{ $car->id }}">Check auto</a></td>
                    </tr>
                @endforeach
            </table> --}}
            </div>
    </body>
</html>
