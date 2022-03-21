<x-layout>
    <p>Nowy wydatek</p>

    <form method="POST" action="{{ route('expenses.save') }}">
        @csrf

        @if($errors->any())
            <p class="text-red-600">W formularzu są błędy!</p>
        @endif

        <p>
            <label>
                Nazwa wydatku
                <input
                    class="rounded bg-gray-50 p-2 border-2 border-blue-600"
                    type="text"
                    name="name"
                    placeholder="Nowe buty"
                    required
                />
            </label>
        </p>

        <p>
            <label>
                Data
                <input
                    class="rounded bg-gray-50 p-2 border-2 border-blue-600"
                    type="date"
                    name="date"
                    value="{{ $today }}"
                    required
                />
            </label>
        </p>

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
                    placeholder="0"
                    value="0"
                    maxlength="2"
                />
            </label>
        </p>

        <x-btn>
            <input type="submit" value="Dodaj" />
        </x-btn>
    </form>
</x-layout>
