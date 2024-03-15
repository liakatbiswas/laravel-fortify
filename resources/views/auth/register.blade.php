<x-app-layout>

  <form action="{{ route("register") }}" method="POST">
    @csrf

    <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name" value="{{ old("name") }}">
      @error("name")
        <div style="color: red">{{ $message }}</div>
      @enderror
    </div>

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
      <label for="password_confirmation">Password Confirmation</label>
      <input type="password" name="password_confirmation" id="password_confirmation"
        value="{{ old("password_confirmation") }}">
      @error("password_confirmation")
        <div style="color: red">{{ $message }}</div>
      @enderror
    </div>

    <div>
      <button type="submit">Register</button>
    </div>

  </form>

</x-app-layout>
