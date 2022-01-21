<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'posts' => Car::latest()->filter(
                request(['category'])
            )->paginate(6)->withQueryString()
        ]);

    }
}
