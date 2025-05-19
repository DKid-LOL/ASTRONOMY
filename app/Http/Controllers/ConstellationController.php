<?php

namespace App\Http\Controllers;
use App\Models\Constellation;

use Illuminate\Http\Request;

class ConstellationController extends Controller
{
    public function index()
    {
        $constellations = Constellation::all();


        return view('constellation.index', [
            'constellations' => $constellations
        ]);
    }

    public function show($id)
    {
        $constellation = Constellation::findOrFail($id);

        return view('constellation.show', compact('constellation'));
    }
}
