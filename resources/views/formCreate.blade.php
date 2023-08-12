<main>

  @if (session('status'))
    <div>{(session('status'))}</div>
  @endif

  <form action="/addUser" method="POST">
  @csrf



    <label for="name">
      <input type="text" name="name" id="name" placeholder="your name">
    </label>

    <label for="email">
      <input type="text" name="email" id="email" placeholder="your email">
    </label>

    <label for="password">
      <input type="password" name="password" id="password" placeholder="your password">
    </label>

    <button type="submit">Valider</button>
    
  </form>

</main>

<footer></footer>

</body>
</html>