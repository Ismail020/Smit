<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('welcome', ['cars' => Car::with('category')->get()]);
    }

    public function dashboard()
    {
        return view('dashboard.dashboard', ['cars' => Car::with('category')->get()]);
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return back();
    }

    public function edit(Car $car)
    {
        // ugur
        return view('edit', ['car' => $car]);
    }

    public function update(Car $car)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => $car->exists ? ['image'] :['required', 'image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($car)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'published_at' => 'required'
        ]);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $car->update($attributes);

        return back();
    }
}
