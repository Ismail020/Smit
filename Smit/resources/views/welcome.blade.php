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
        <div class='flex justify-center'>
            <div class="grid grid-cols-4">
                @foreach ($cars as $car)
                    
                        {{ $car->merk }}
                        {{ $car->type }}
                        {{ $car->category->name }}
                        <a href="/car/{{ $car->id }}">Check auto</a>
                    
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
