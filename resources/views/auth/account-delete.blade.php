<x-app-layout>
    <form action="{{ route('account.delete') }}" method="POST">
        @csrf
        <button type="submit">Delete</button>
    </form>
</x-app-layout>
