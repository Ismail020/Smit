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
<body class="antialiased">
<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-1 xl:grid-cols-2 gap-5">
    <div class="p-10">
        <div class="max-w-l rounded overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $cars->merk }}</div>
                <p class="text-gray-700 text-base">
                    Type: {{ $cars->type }}
                </p>
                <p class="text-gray-700 text-base">
                    Kenteken: {{ $cars->kenteken }}
                </p>
                <p class="text-gray-700 text-base">
                    Bouwjaar: {{ $cars->bouwjaar }}
                </p>
                <p class="text-gray-700 text-base">
                    Inkoopprijs: {{ $cars->inkoopprijs }}
                </p>
                <p class="text-gray-700 text-base">
                    Verkoopprijs: {{ $cars->verkoopprijs }}
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $cars->category->name }}</span>
                <form method="POST" action="/dashboard/delete/{{ $cars->id }}">
                    @csrf
                    @method('DELETE')
                    <td>
                        <button class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Delete</button>
                    </td>
                    <td><a class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2ph" href="/dashboard/edit/{{ $cars->id }}">Edit</a></td>
                </form>
            </div>
        </div>
    </div>
    <div class="p-10">
        <div class="max-w-l rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/storage/{{$cars->foto}}"  alt="">
        </div>
    </div>
</div>
</body>
</html>
