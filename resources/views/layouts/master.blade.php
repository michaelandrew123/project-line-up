<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.styles')
</head>
<body>

@include('partials.header')
<main class="container m-auto">
    @yield('content')
</main>

@include('partials.footer')

@include('partials.scripts')

</body>
</html>