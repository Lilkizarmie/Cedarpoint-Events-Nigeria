{{-- @include('layouts.header');
@yield('main-container');
@include('layouts.footer'); --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="description" content="Cedarpoint Events">
    <meta name="author" content="Event Planning Company">
    <title>Cedarpoint Events - Decoration | Event Hall | Planning</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animsition.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/socicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.pagepiling.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon.png">
    <link rel="manifest" href="favicon/site.html">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="theme-yellow dark-horizontal">
    <div class="animsition">
        <div class="wrapper">
            @include('layouts.header')
            <ul class="social social-rounded social-rounded-fixed social-rounded-dark">
                <li><a href="#"><i class="socicon-twitter"></i></a></li>
                <li><a href="#"><i class="socicon-facebook"></i></a></li>
                <li><a href="#"><i class="socicon-googleplus"></i></a></li>
            </ul>
            <div class="establised">establised 2016</div>
            <div class="copyright-fixed">&copy; 2022 Cedarpoint.&nbsp; Events</div>
            @yield('main-container')
        </div>
    </div>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../../../code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
    </script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/animsition.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.pagepiling.min.js')}}"></script>
    <script src="{{asset('js/jquery.pagepiling.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/TweenMax.min.js')}}"></script>
    <script src="{{asset('js/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('js/animation.gsap.min.js')}}"></script>
    <script src="{{asset('js/jquery.viewport.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.a-pagepiling').pagepiling({
                scrollingSpeed: 280,
                menu: '#menu',
                loopTop: true,
                loopBottom: true,
                navigation: {
                    'position': 'right'
                },
                afterLoad: function(anchorLink, index) {
                    if (index == 1 || index == 3 || index == 5) { // Section with dark bacgkrounds
                        $('body').addClass('dark-horizontal');
                    } else {
                        $('body').removeClass('dark-horizontal');
                    }
                },
                onLeave: function() {
                    $('.section.active .slide-bg-list .slide-bg').removeClass('active').eq(0).addClass(
                        'active')
                }
            });

            $('.a-pp-prev').on('click', function() {
                $.fn.pagepiling.moveSectionUp();
            });
            $('.a-pp-next').on('click', function() {
                $.fn.pagepiling.moveSectionDown();
            });
        });
    </script>
</body>

</html>
