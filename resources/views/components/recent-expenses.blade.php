@props(['expenses', 'count'])

<ul>
    @foreach ($expenses->take($count) as $expense)
        <li>
            <strong>{{ $expense->name }}</strong> -
            {{ $expense->money / 100 }} zł
        </li>
    @endforeach
</ul>
