<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceipesController extends Controller
{
    public function receipes_list()
    {
        return view ('receipes.list');
    }
}
