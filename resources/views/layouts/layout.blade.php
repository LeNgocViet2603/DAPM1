<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="shortcut icon" type="image/png" href="https://is1-ssl.mzstatic.com/image/thumb/Purple114/v4/b7/af/1f/b7af1f9f-1ce8-e829-f822-184e053bda4f/source/256x256bb.jpg" />
    @yield('title')
</head>

<body>
    <div>
        @include('components.header')
        <main class="pb-20 min-h-screen">
            @yield('content')
        </main>
        @include('components.footer')
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('.banner-slider').slick({
                infinite: true,
                slidesToShow: 1,
                arrows: false,
                autoplay: true
            })
        })
    </script>

    <script src="{{asset('js/register.js')}}"></script>

</body>

</html>