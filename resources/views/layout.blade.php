<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>MIAM</title>
</head>
<body>

  <header>
    <div class=authentification style=justify-content:flex-end>
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
      </div>
      
      <div class=title style=text-align:center>      
        <h1>MIAM, le bon goût de chez vous</h1>
        <p>Partagez vos meilleures recettes</p>

        <a href="/receipes">Liste des recettes</a>
        <br>
        @auth
          <br>
          <a href="/add">Ajouter une recette</a>
        @endauth
      </div>
  </header>

  <main>

    @yield('content')

  </main>

  <footer></footer>

</body>
</html>

