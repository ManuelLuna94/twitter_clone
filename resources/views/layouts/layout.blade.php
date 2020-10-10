<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="h-screen flex flex-col">
    <section class="border-0 border-b-2 border-solid border-gray-600">
        <header class="px-10 p-4">
            <h1 class="text-3xl text-white">Tweety</h1>
        </header>
    </section>

    <section class="px-10 h-full">
        <main class="h-full">
        @yield('content')
        </main>
    </section>
</body>
</html>
