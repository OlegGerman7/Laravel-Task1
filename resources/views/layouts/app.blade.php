<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="container mx-auto py-10">
        @yield('content')
    </div>
</body>
</html>