<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>谱元科技--中国数字为生态领军者</title>
    @yield('styles')
    <link rel="stylesheet" href="/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title">
    @include('layouts.partials.header')
</head>
<body>

@include('layouts.partials.navbar')

@yield('content')

@include('layouts.partials.footer')


<script src="/js/app.js" charset="utf-8"></script>
@yield('scripts')
<script src="/js/script.js" charset="utf-8"></script>

</body>
</html>
