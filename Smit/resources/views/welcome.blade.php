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
<div class="grid pl-20 pr-20 pt-10 gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <div
        class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-gray-800 dark:bg-gray-800"
    >
        <div class="p-4 flex items-center">
            <div
                class="p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4"
            >
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                    <path
                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    ></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                <td>Aantal auto's</td>
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ $aantal }}
                </p>
            </div>
        </div>
    </div>
    <div
        class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800"
    >
        <div class="p-4 flex items-center">
            <div
                class="p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4"
            >
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                    <path
                        fill-rule="evenodd"
                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Inkoopprijs totaal
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $ {{ $inkoopprijs }}
                </p>
            </div>
        </div>
    </div>
    <div
        class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800"
    >
        <div class="p-4 flex items-center">
            <div
                class="p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4"
            >
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                    <path
                        fill-rule="evenodd"
                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Verkoopprijs totaal
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $ {{ $verkoopprijs }}
                </p>
            </div>
        </div>
    </div>
    <div
        class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800"
    >
        <div class="p-4 flex items-center">
            <div
                class="p-3 rounded-full text-teal-500 dark:text-teal-100 bg-teal-100 dark:bg-teal-500 mr-4"
            >
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                    <path
                        fill-rule="evenodd"
                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Marge
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $ {{ $verkoopprijs - $inkoopprijs }}</p>
            </div>
        </div>
    </div>
</div>

<span
    class="ml-20 inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a
        href="/create}}">Verkoop een voertuig</a></span>

<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    @foreach ($cars as $car)
        <div class="p-10">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/storage/{{ $car->foto }}" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $car->merk }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $car->type }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $car->category->name }}</span>
                    <span
                        class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a
                            href="/car/{{ $car->id }}">Check auto</a></span>
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>
</body>
</html>
