<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SchoolHub')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

    @include('components.navbar')

    <main class="min-h-screen">
        @yield('contents')
    </main>

    @include('components.footer')
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>