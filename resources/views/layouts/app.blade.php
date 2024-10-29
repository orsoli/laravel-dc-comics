<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Orsol Filaj">
        <meta name="description" content="@yield('page-description', 'Page Description')">
        @yield('add-meta')

        {{-- CDN links  --}}
        @yield('add-cdn')

        <title>@yield('page-name', 'Page Title')</title>


    </head>
    <body>
        {{-- Header  --}}
        @include('partials.header')

        {{-- Main  --}}
        <main>
            @yield('main-content')
        </main>

        {{-- Footer  --}}
        @include('partials.footer')

        {{-- Integrate app.js  --}}
        @vite("resources/js/app.js")

        {{-- Integrate scripts  --}}
        @yield('add-script')

    </body>
</html>
