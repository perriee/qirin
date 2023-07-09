<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Page | QiRin</title>
    @include('partials.font')
    @include('partials.style')
</head>
<body class="font-inter">

    @include('partials.header')

    <main>
        @yield('content')
    </main>
    
</body>
</html>