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
      @guest
        <li><a href="{{ route("login") }}">Login</a></li>
        <li><a href="{{ route("register") }}">Register</a></li>
      @endguest

      @auth
        <li><a href="">{{ auth()->user()->name }}</a></li>
        <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
        <li><a href="{{ route('account.delete') }}">Account Delete</a></li>
        <li>
          <form action="{{ route("logout") }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
          </form>
        </li>
      @endauth
      <li><a href="{{ route("home") }}">Home</a></li>
    </ul>
  </nav>

  {{ $slot }}

</body>

</html>
