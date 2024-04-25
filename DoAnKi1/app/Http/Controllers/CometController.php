<?php

namespace App\Http\Controllers;

use App\Models\Comet;
use Illuminate\Http\Request;

class CometController extends Controller
{
    // Hiển thị danh sách các hành tinh
    public function index()
    {
        $comets = Comet::all();
        return view('comets.index', compact('comet'));
    }

    // Hiển thị thông tin chi tiết của một hành tinh
    public function show($id)
    {
        $comet = Comet::findOrFail($id);
        return view('comets.show', compact('comet'));
    }
}
