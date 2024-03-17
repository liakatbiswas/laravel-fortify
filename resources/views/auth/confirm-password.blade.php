<x-app-layout>
    <form action="{{ route('password.confirm') }}" method="POST">
        @csrf

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
            @error('password')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Continue</button>
    </form>
</x-app-layout>
