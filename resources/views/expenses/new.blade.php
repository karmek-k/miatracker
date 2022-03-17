<x-layout>
    <p>Nowy wydatek</p>

    <form method="POST" action="{{ route('expenses.save') }}">
        @csrf

        <p>
            <label>
                Złote
                <input
                    class="rounded bg-gray-50 p-2 border-2 border-blue-600"
                    type="number"
                    name="zlote"
                    placeholder="1234"
                    required
                />
            </label>
        </p>

        <p>
            <label>
                Grosze
                <input
                    class="rounded bg-gray-50 p-2 border-2 border-blue-600"
                    type="number"
                    name="grosze"
                    placeholder="00"
                    maxlength="2"
                />
            </label>
        </p>

        <x-btn>
            <input type="submit" value="Dodaj" />
        </x-btn>
    </form>
</x-layout>
