<?php

namespace App\Http\Controllers;

use App\Models\Observatory;
use Illuminate\Http\Request;

class ObservatoryController extends Controller
{
    public function index()
    {
        $observatories = Observatory::all();
        return view('observatories.index', compact('observatories'));
    }

    public function show($id)
    {
        $observatory = Observatory::findOrFail($id);
        return view('observatories.show', compact('observatory'));
    }
}
