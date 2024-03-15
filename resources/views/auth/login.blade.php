<x-app-layout>

  <form action="{{ route("login") }}" method="POST">
    @csrf

    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="{{ old("email") }}">
      @error("email")
        <div style="color: red">{{ $message }}</div>
      @enderror
    </div>

    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="{{ old("password") }}">
      @error("password")
        <div style="color: red">{{ $message }}</div>
      @enderror
    </div>

    <div>
      <button type="submit">Login</button>
    </div>

  </form>

</x-app-layout>
