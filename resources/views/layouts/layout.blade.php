<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('title')
    <title>Document</title>
</head>

<body>
    <div class="bg-slate-400">

        @include('components.header')
        <main class="container mx-auto">
            @yield('content')
        </main>
    </div>
    
</body>
</html>