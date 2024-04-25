<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // Hiển thị danh sách các hành tinh
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    // Hiển thị thông tin chi tiết của một hành tinh
    public function show($id)
    {
        $planet = Planet::findOrFail($id);
        return view('planets.show', compact('planet'));
    }
}
