<x-layout>
    <p class="flex flex-col">
        Wydatki w tym tygodniu:
        <strong>{{ $expenses }}</strong>
    </p>
    <a href="{{ route('expenses.new') }}">
        <button class="p-4 text-xl bg-blue-400 text-white rounded">
            Dodaj nowy wydatek
        </button>
    </a>
</x-layout>
