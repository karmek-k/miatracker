<x-layout>
    <form action="{{ route('auth.validate') }}" method="POST">
        @csrf

        @if ($errors->any())
            <p class="text-red-600">{{ $errors->first() }}</p>
        @endif

        <p>
            <label>
                Login
                <input
                    class="rounded bg-gray-50 p-2 border-2 border-blue-600"
                    type="text"
                    name="username"
                    required
                />
            </label>
        </p>

        <p>
            <label>
                Hasło
                <input
                    class="rounded bg-gray-50 p-2 border-2 border-blue-600"
                    type="password"
                    name="password"
                    required
                />
            </label>
        </p>

        <x-btn>
            <input
                class="cursor-pointer"
                type="submit"
                value="Zaloguj się"
            />
        </x-btn>
    </form>
</x-layout>
