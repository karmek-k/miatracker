<x-layout>
    <p class="flex flex-col">
        Wydatki ({{ count($expenses) }}):
        <strong>{{ $expenses->sum('money') / 100.0 }} zł</strong>
    </p>

    <a href="{{ route('expenses.new') }}">
        <x-btn>
            Dodaj nowy wydatek
        </x-btn>
    </a>

    <h2>Niedawne wydatki</h2>
    <x-recent-expenses :expenses="$expenses" count="5"></x-recent-expenses>
</x-layout>
