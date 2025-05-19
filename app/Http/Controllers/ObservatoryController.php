<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Observatory;

class ObservatoryController extends Controller
{
    public function index()
    {
        $observatories = Observatory::all();


        return view('observatory.index', [
            'observatories' => $observatories
        ]);
    }

    public function show($id)
    {
        $observatory = Observatory::findOrFail($id);

        return view('observatory.show', compact('observatory'));
    }
}