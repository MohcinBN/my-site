<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Mohcin Bounouara</title>

    </head>
    <body class="bg-white">
        <div class="container mt-5 col-md-8 mx-auto">
    @include('layouts.header')
    <div class="row">
        @include('layouts.nav')
        {{-- articles --}}
        <div class="col-md-9 mt-4">
                test about 
        </div>
    </div>
</div>
</div>