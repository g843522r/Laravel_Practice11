<!DOCTYPE html>
  <html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!--CSRF Token-->
      <meta name="csrf-token" content="{{csrf_token() }}">

      {{-- 各ページにtitleタグを入れるために@yieldで空けておく --}}      
      <title>@yield('title')</title>
      
      <!--Scripts-->
      {{-- Laravel標準で用意されているJavascriptを読み込む --}}
      <script src="{{ secure_asset('js/app.js') }}" defer></script>
      
      <!--Fonts-->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
      
      <!--Styles(PHP/Laravel 11の課題3より編集)-->
      <!--{{-- Laravel標準で用意されているCSSを読み込む --}}-->
      <!--<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">-->
      
      {{-- この章(PHP/Laravel11)の後半で作成するCSSを読み込む --}}
      <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
    </head>
    
    
    <body>
      <div id="app">
        
        {{-- 画面上部に表示するナビゲーションバー --}}
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
          <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">

              </ul>
            </div>
          </div>
        </nav>
        {{-- ここまでナビゲーションバー --}}

        <main class="py-4">
          {{-- コンテンツをここに入れるため、@yieldで空けてく。 --}}
          @yield('content')
        </main>
        
      </div>
    </body>
  </html>