

@extends('layout')

@section('content')

 @if (session('status'))
    <div>{{ session('status') }}</div>
  @endif

  <div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Receipe name</th>
          <th>file</th>
          <th>Cooking time</th>
          <th>Ingredients</th>
          <th>Description</th>
          @auth
          <th>Actions</th>
          @endauth
        </tr>
      </thead>
      <tbody>
        @foreach($receipes as $receipe)
          <tr>
            <td>{{ $receipe->id }} </td>
            <td>{{ $receipe->receipeName }}</td>


            <td>{{ $receipe->file }}</td>
            <td>{{ $receipe->cookingTime }}</td>
            <td>{{ $receipe->ingredients }}</td>
            <td>{{ $receipe->receipeDescription }}</td>
            @auth
            <td>
              <a href="/update-receipe/{{ $receipe->id }}">Update</a>
              <a href="/delete-receipe/{{ $receipe->id }}">Delete</a>
            </td>
            @endauth
          </tr>
        @endforeach
      </tbody>

    </table>
  </div>

  @endsection


