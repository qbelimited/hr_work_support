<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HRWS') }}</title>
    @include('includes.header')
</head>

<body>
    <div id="app">
        @include('includes.nav')

        <main class="main-content  mt-0">
            @yield('content')
        </main>
    </div>

    @include('includes.scripts')
</body>

</html>
