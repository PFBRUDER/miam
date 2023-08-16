<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Models\Receipes;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;



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
        $receipe = Receipes::all();
        $user = auth()->user();  
        $user_id = auth()->user()->id;        

        $request-> validate([
            'user_id'=> 'nullable',
            'receipeName' => 'required',
            'file' => 'required|image',
            'cookingTime' => 'required',
            'ingredients' => 'required',
            'receipeDescription' => 'required',
        ]);

        // $filename = time() . '.' . $request->file->extension();
        // $path = $request -> file('file')->storeAs(
        //     'images', 
        //     $filename,
        //     'public'
        // );

        $receipe = Receipes::create ([
            'user_id' => $user_id,
            // 'file' => $filename,
            'file' => $request->file,
            'receipeName' => $request->receipeName,
            'cookingTime' => $request->cookingTime,
            'ingredients' => $request->ingredients,
            'receipeDescription' => $request->receipeDescription,
        ]);

        // $image= new Image(['path'=>$path]);
        // $receipe->image()->save($image);

        // $receipe = new Receipes();
        // $user = User::find($request->id);

        // $receipe->user_id = $request->user_id;
        // $receipe->receipeName = $request->receipeName;
        // $receipe->file = $request->file;
        // $receipe->cookingTime = $request->cookingTime;
        // $receipe->ingredients = $request->ingredients;
        // $receipe->receipeDescription = $request->receipeDescription;

        // $receipe -> save();
        // $user -> save();


        // event(new Registered($receipe));

        return redirect('/add')->with('status', 'la recette a été ajoutée avec succès.');
    }


    public function update_receipe($id)
    {
        $receipe = Receipes::find($id);
        return view ('receipes.update', compact('receipe'));

    }


    public function update_receipe_traitement (Request $request)
    {
        $request-> validate([
            'user_id',
            'receipeName' => 'required',
            'file' => 'required',
            'cookingTime' => 'required',
            'ingredients' => 'required',
            'receipeDescription' => 'required',
        ]);

        $receipe = Receipes::find($request->id);


        $receipe->user_id = $request->user_id;
        $receipe->receipeName = $request->receipeName;
        $receipe->file = $request->file;
        $receipe->cookingTime = $request->cookingTime;
        $receipe->ingredients = $request->ingredients;
        $receipe->receipeDescription = $request->receipeDescription;

        $receipe -> update();

        return redirect('/receipes')->with('status', 'la recette a été modifiée avec succès.');
    }
    
    public function delete_receipe($id)
    {
        $receipe = Receipes::find($id);
        $receipe-> delete();
        return redirect('/receipes')->with('status', 'la recette a été supprimée avec succès.');
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
