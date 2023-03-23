<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @include('layouts.inc.css')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.inc.admin.navbar')
        @include('layouts.inc.admin.sidebar')
        <div class="content-wrapper">
        @yield('content')
        </div>
        @include('layouts.inc.admin.footer')
    </div>
    @include('layouts.inc.js')
</body>
</html>