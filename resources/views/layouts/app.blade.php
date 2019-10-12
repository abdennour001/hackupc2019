<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>

<body>
<div id="app">
    @yield('content')
      <video_component username="Hi" room_name="439i94k3">
      </video_component>
</div>
                    <!--YouTube Embed VideoPlayer-->
                    <div id="player1" class="video"></div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="js/pubnub.min.js"></script>
  <script src="js/videosync.js"></script>
  <script src="js/myjs.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
