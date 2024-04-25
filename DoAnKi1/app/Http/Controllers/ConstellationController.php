<?php

namespace App\Http\Controllers;

use App\Models\Constellation;
use Illuminate\Http\Request;

class ConstellationController extends Controller
{
    public function index()
    {
        $constellations = Constellation::all();
        return view('constellations.index', compact('constellations'));
    }

    public function show($id)
    {
        $constellation = Constellation::findOrFail($id);
        return view('constellations.show', compact('constellation'));
    }
}