<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MIAM</title>
</head>
<body> -->

  <!-- <header>
    
    </header>
    
    <main> -->

    @extends('layout')

    @section('content')
      
    <hr>
      <div class=title style=text-align:center>      
        <h2>Ajoutez votre délicieuse recette</h2>
        <!-- <p>Partagez vos meilleures recettes</p> -->
  
      </div>

  @if (session('status'))
    <div>{{ session('status') }}</div>
  @endif

  <ul>
    @foreach ($errors->all() as $error)
      <li> {{ $error }} </li>
    @endforeach
  </ul>


    <!-- il faudra remettre en POST après -->
    <form action="/add/traitement" method="get">
      @csrf

      <label for="user_id">
        <!-- à remettre en hidden -->
        <input type="text" name="user_id" >
      </label>
      <br>
      
      <label for="receipeName">
        <input type="text" name="receipeName" id="receipeName" placeholder="Your receipe name">
      </label>
      <br>
      
      <label for="file">
        <input type="file" name="file" id="file">
      </label>
      <br>
      
      <label for="cookingTime">
        <input type="time" name="cookingTime" id="cookingTime">
      </label>
      <br>
      
      <label for="ingredients">
        <textarea name="ingredients" id="ingredients" cols="30" rows="10" placeholder="Your ingredients"></textarea>
      </label>
      <br>
      
      <label for="receipeDescription">
        <textarea name="receipeDescription" id="receipeDescription" cols="30" rows="10" placeholder="Your receipe description"></textarea>
      </label>
      <br>  

      <button type="submit">Ajouter la recette</button>

      <hr>
      <a href="/receipes">Revenir à la liste des recettes</a>

    </form>

    @endsection

  <!-- </main>

  <footer></footer>

</body>
</html> -->