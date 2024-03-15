<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fortify</title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="{{ route("login") }}">Login</a></li>
      <li><a href="{{ route("register") }}">Register</a></li>
      <li><a href="{{ route("home") }}">Home</a></li>
    </ul>
  </nav>

  {{ $slot }}

</body>

</html>
