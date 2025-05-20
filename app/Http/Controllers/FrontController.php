<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class FrontController extends Controller

{
    public function index()
    {
        $artikel = Artikel::all();
        return view('welcome', compact('artikel'));
    }
}