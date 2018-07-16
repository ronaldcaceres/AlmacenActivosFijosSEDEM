<?php

namespace App\Http\Controllers;

use App\Models\Regional;
use Illuminate\Http\Request;

class regionalController extends Controller
{
    public function index()
    {
        $regionales = Regional::all();
        $title = 'Listado de Regionales';
        return view('regionales.index', compact('title', 'regionales'));
    }
}
