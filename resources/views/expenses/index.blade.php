<x-layout>
    <p class="flex flex-col">
        Wydatki w tym tygodniu:
        <strong>{{ $expenses }} zł</strong>
    </p>
    <a href="{{ route('expenses.new') }}">
        <x-btn>
            Dodaj nowy wydatek
        </x-btn>
    </a>
</x-layout>
