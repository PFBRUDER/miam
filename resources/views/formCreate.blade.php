<main>

  @if (session('status'))
    <div>{(session('status'))}</div>
  @endif

  <form action="/addUser" method="POST">
  @csrf



    <label for="name">
      <input type="text" name="name" id="name" placeholder="your name">
    </label>

    <label for="firstname">
      <input type="text" name="firstname" id="firstname" placeholder="your firstname">
    </label>

    <label for="firstname">
      <input type="password" name="password" id="password" placeholder="your password">
    </label>

    <button type="submit">Valider</button>
    
  </form>

</main>

<footer></footer>

</body>
</html>