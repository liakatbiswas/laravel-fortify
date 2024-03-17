<x-app-layout>
    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Request reset password</button>
        </div>
    </form>

</x-app-layout>
