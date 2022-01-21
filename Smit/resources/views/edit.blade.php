<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
<form method="POST" action="/dashboard/edit/{{ $car->id }}" enctype="multipart/form-data" class="">
    @csrf
    @method('PATCH')

    <div class="w-full bg-white-800 h-screen">
        <div class="bg-gradient-to-b from-white-800 to-blue-600 h-96"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-gray-900 shadow-lg w-full rounded p-8 sm:p-12 -mt-72">
                <p class="text-3xl font-bold leading-7 text-center text-white">Voertuig informatie updaten</p>
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Kenteken</label>
                        <input type="text" id="kenteken" name="kenteken" required value="{{ $car->kenteken }}"
                               class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"/>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Merk</label>
                        <input type="text" id="merk" name="merk" required value="{{ $car->merk }}"
                               class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"/>
                    </div>
                </div>
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Type</label>
                        <input type="text" id="type" name="type" required value="{{ $car->type }}"
                               class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"/>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Bouwjaar</label>
                        <input type="text" id="bouwjaar" name="bouwjaar" required value="{{ $car->bouwjaar }}"
                               class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"/>
                    </div>
                </div>
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Inkoopprijs</label>
                        <input type="number" id="inkoopprijs" name="inkoopprijs" required
                               value="{{ $car->inkoopprijs }}"
                               class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"/>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none text-gray-300">Verkoopprijs</label>
                        <input type="number" id="verkoopprijs" name="verkoopprijs" required
                               value="{{ $car->verkoopprijs }}"
                               class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"/>
                    </div>
                </div>
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none text-gray-300">Categorie</label>
                        <select
                            class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"
                            name="category_id" id="category_id">
                            @foreach (\App\Models\Category::all() as $category)
                                <option
                                    value="{{ $category->id }}"
                                    {{ old('category_id', $car->category_id) == $category->id ? 'selected' : '' }}
                                    class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded"
                                >{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center w-full">
                <button
                    type="submit"
                    class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                    Update voertuig
                </button>
            </div>
        </div>
    </div>
    </div>
</form>
</body>
</html>
