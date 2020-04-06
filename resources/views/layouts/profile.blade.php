<!DOCTYPE html>
<html lang="{{ app ()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family-Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
        <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                        <ul class="navbar-nav mr-auto">
                    
                        </ul>
                    
                        <ul class="navbar-nav ml-auto">
                            {{ --課題1,ログインリンク、ログアウトリンクを表示-- }}
                            <li><a class="navlink" href="{{ route('login')}}">{{ --('messages.Login') }}</a></li>
                            <li><a class="navlink" href="{{ route('logout')}}">{{ --('messages.Logout') }}</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}
            
            <main class="py-4">
            
                @yield('content')
            </main>
        </div>
    </body>
</html>