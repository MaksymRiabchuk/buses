<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script src="https://kit.fontawesome.com/11b944867c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://vjs.zencdn.net/8.22.0/video.min.js"></script>
    <link rel="stylesheet" href="@yield('css')">
    @stack('styles')
    @stack('scripts')
</head>
<body data-home-page="index.html" data-home-page-title="Головна" data-path-to-root="./" data-include-products="false"
      class="u-body u-xl-mode" data-lang="ua">
    @include('header')
    <div>
    @yield('content')
    </div>
    @include('footer')
</body>
</html>
