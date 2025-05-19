<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comet;

class CometController extends Controller
{
    public function index()
    {
        $comets = Comet::all();
        return view('comet.index', [
            'comets' => $comets
        ]);

    }

    public function show($id)
    {
        $comet = Comet::findOrFail($id);

        return view('comet.show', compact('comet'));
    }
}
