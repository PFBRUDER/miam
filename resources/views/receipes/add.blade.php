<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MIAM</title>
</head>
<body>

  <header>

    <!-- <div class=authentification style=justify-content:flex-end>
      @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
          @auth
          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
          @else
          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
          @endif
          @endauth
        </div>
       @endif          
    </div> -->

    <div class=title style=text-align:center>      
      <h1>Ajoutez votre recette</h1>
      <hr>
      <!-- <p>Partagez vos meilleures recettes</p> -->


      <!-- <a href="/add">Ajouter une recette</a> -->
    </div>

  </header>

  <main>
    <form action="" method="get">
      @csrf

      <label for="user_id">
        <input type="hidden" name="user_id" >
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
      
      <label for="ReceipeDescription">
        <textarea name="ReceipeDescription" id="ReceipeDescription" cols="30" rows="10" placeholder="Your receipe description"></textarea>
      </label>
      <br>  

      <button type="submit">Ajouter la recette</button>

      <hr>
      <a href="/">Revenir à la iste des recettes</a>

    </form>

  </main>

  <footer></footer>

</body>
</html>