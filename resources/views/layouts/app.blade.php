<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <v-app>
            <div>
                <v-row justify="center" align="center" class="primary elevation-6">
                    <v-col cols=12 xl=9 class="py-0">
                        <v-app-bar color="primary" dark elevation="0">
                            <v-app-bar-nav-icon></v-app-bar-nav-icon>
                            <v-toolbar-title class="pb-1">تاینی اسپرت</v-toolbar-title>
                        </v-app-bar>
                    </v-col>
                </v-row>
            </div>

            <main class="py-4">
                @yield('content')
            </main>
        </v-app>
    </div>
</body>

</html>