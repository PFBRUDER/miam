<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipes;

class ReceipesController extends Controller
{
    public function receipes_list()
    {
        $receipes = Receipes::all();
        return view ('receipes.list', compact('receipes'));
    }
    
    public function add_receipe()
    {
        return view ('receipes.add');

    }

    public function add_receipe_traitement ( Request $request)
    {

        // dd($request);
        $request-> validate([
            'user_id',
            'receipeName' => 'required',
            'file' => 'required',
            'cookingTime' => 'required',
            'ingredients' => 'required',
            'receipeDescription' => 'required',
        ]);

        $receipe = new Receipes();

        $receipe->user_id = $request->user_id;
        $receipe->receipeName = $request->receipeName;
        $receipe->file = $request->file;
        $receipe->cookingTime = $request->cookingTime;
        $receipe->ingredients = $request->ingredients;
        $receipe->receipeDescription = $request->receipeDescription;

        $receipe -> save();

        return redirect('/add')->with('status', 'la recette a été ajoutée avec succès.');
    }


        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }


    public function login()
    {
        

        // 

        
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
