<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <title>Miatracker</title>
</head>
<body>
    <main class="max-w-2xl mx-auto my-4">
        <header>
            <a href="{{ route('index') }}">
                <h1 class="text-4xl flex justify-center">Miatracker</h1>
            </a>

            @auth
                <x-btn>
                    <a href="{{ route('auth.logout') }}">Wyloguj się</a>
                </x-btn>
            @endauth
        </header>
        {{ $slot }}
    </main>
</body>
</html>
