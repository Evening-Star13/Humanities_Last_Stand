<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Citizen Registry</title>
</head>
<body>

  <header>
    <nav>
      <h1>Citizen Registry</h1>
      <a href="/ninjas">All Specimens</a>
      <a href="/ninjas/create">Register Specimen</a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>
