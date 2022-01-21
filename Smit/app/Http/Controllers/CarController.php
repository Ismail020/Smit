<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'cars' => Car::with('category')->get(),
            'aantal' => Car::count(), 'inkoopprijs' => Car::sum('inkoopprijs'),
            'aantalv' => Car::count(), 'verkoopprijs' => Car::sum('verkoopprijs')
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'kenteken' => ['required', 'max:9', 'min:8', Rule::unique('cars', 'kenteken')],
            'merk' => ['required'],
            'type' => ['required'],
            'bouwjaar' => ['required'],
            'inkoopprijs' => ['required'],
            'verkoopprijs' => ['required'],
            'foto' => ['required', 'image'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);


        $attributes['foto'] = request()->file('foto')->store('thumbnails');

        Car::create($attributes);

        return redirect('/');
    }

    public function show(Car $car)
    {
        return view('show', ['cars' => $car]);
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/');
    }

    public function edit(Car $car)
    {
        return view('edit', ['car' => $car]);
    }

    public function update(Car $car)
    {
        $attributes = request()->validate([
            'kenteken' => ['required', 'max:9', 'min:8', Rule::unique('cars', 'kenteken')],
            'merk' => ['required'],
            'type' => ['required'],
            'bouwjaar' => ['required'],
            'inkoopprijs' => ['required'],
            'verkoopprijs' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $car->update($attributes);

        return redirect('/');
    }
}
