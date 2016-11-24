<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title">
    @include('layouts.partials.header')
</head>
<body>

@include('layouts.partials.navbar')

@yield('content')

@include('layouts.partials.footer')

<script src="/js/app.js" charset="utf-8"></script>
<script src="/js/script.js" charset="utf-8"></script>

</body>
</html>
