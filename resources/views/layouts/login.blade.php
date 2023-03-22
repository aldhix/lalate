<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @include('layouts.inc.css')
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        @yield('content')
    </div>
    @include('layouts.inc.js')
</body>
</html>