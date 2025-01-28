<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Citizen Registry</title>

  @vite('resources/css/app.css')
</head>
<body class='px-8 py-12 text-center'>
  <h1>Welcome to the Human Registry Correspondence System</h1>
  <p>Click the Button below to self Register</p>
  <a href="/ninjas" class="inline-block mt-4 btn">
    Register
  </a>
</body>
</html>
