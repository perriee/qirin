<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Testing' }} | QiRin</title>
    @include('partials.font')
    @include('partials.style')
</head>
<body class="font-inter">

    <header>
        @yield('navbar')
    </header>

    <main>
        @yield('content')
    </main>
    
</body>
</html>