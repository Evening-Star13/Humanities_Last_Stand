<?php

namespace App\Http\Controllers;

use App\Models\Livestock;
use Illuminate\Http\Request;

class LivestockController extends Controller
{
    public function index()
    {
        // route --> /ninjas/
        $ninjas = Livestock::orderBy('created_at', 'desc')->get();

        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id)
    {
        // route --> /ninjas/{id}
    }

    public function create()
    {
        // route --> /ninjas/create
    }

    public function store()
    {
        // route --> /ninjas/ (POST)
    }
}
