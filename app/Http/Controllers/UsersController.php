<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
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
        return view ("formCreate");
    }

    public function addUser(Request $request)
    {
      $request-> validate([
        'name'=> 'required',
        'firstname'=> 'required',
        'password'=> 'required'
      ]);

      $user = new User();

      $user->name = $request->name;
      $user->firstname = $request->firstname;
      $user->password = $request->password;

      $user -> save();
      return redirect ('/')->with('status', 'l\'utilisateur a bien été créé');

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
