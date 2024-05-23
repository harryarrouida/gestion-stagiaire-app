<!doctype html>
<html data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="text-slate-600">
    <header class="fixed top-0 right-0 left-0 w-full">
        @include('layouts.navbar')
    </header>
    <main class="">
        @yield('content')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>

</html>
