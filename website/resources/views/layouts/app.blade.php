<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GMS') }}</title>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('assets/js/app.js') }}" defer></script>
    </head>
    <body>
       	<div class="wrapper">
            {{-- sibe bar --}}
            @include('layouts.navigation', [
                    'isActive' => $active ?? route('dashboard.index'),
                ])

            <div class="main">
                
                @include('layouts.top-nav')

                <!-- Page Content -->
                <main class="content">
                    {{ $slot }}
                </main>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-6 text-start">
                                <p class="mb-0">
                                    <a class="text-muted" href="javascript:void(0)"><strong>Garbage</strong></a> - <a class="text-muted" href="javascript:void(0)"><strong> Monitoring System</strong></a> &copy; All rights reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </body>
</html>
