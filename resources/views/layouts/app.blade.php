<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/primer.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style type="text/css">
        body {
            font-size: 102%;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }

        h1, h2, .font-serif {
            font-family: 'Cormorant Garamond', serif;
        }

        h1, h2 , h3, h4 {
            line-height: 1.1;
        }

        a {
            color: inherit;
        }

        a:hover {
            text-decoration: none;
        }

        .font-lg {
            font-size: 3.25rem;
        }

        .font-thin {
            font-weight: 100;
        }

        .font-600 {
            font-weight: 600;
        }

        .btn-lg {
            /*font-size: 1.2rem;*/
            padding: .8rem 2.25rem !important;
        }

        .border-dotted {
            background-image: linear-gradient(to right, #09244b 10%, rgba(255, 255, 255, 0) 0%);
            background-position: bottom;
            background-size: 24px 2.8px;
            background-repeat: repeat-x;
        }

        .btn:focus, button:focus {
            outline: none;
            box-shadow: none;
        }

        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            -webkit-animation-duration: .2s;
            animation-duration: .2s;
        }

        .dropdown-item:hover {
            background-color: transparent;
        }

        footer a:not(.btn):hover, #lead-bg a:not(.btn):hover {
            color: inherit;
            opacity: 0.6;
        }

        @-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 12%, 0);
    transform: translate3d(0, 12%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 12%, 0);
    transform: translate3d(0, 12%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.animate__animated.animate__faster {
    -webkit-animation-duration: .2s;
    animation-duration: .2s;
    -webkit-animation-duration: .2s;
    animation-duration: .2s;
}
    </style>

    @stack('header')
</head>
<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ mix('js/app.js') }}"></script>

    <script type="text/javascript">
        onMobile = function() {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        }

        $(document).ready(function() {
            $('button.navbar-toggler').on('click', function () {
                let $hamburger = $('.animated-icon2');

                $hamburger.toggleClass('open');

                if ($hamburger.hasClass('open')) {
                    $('nav.navbar').not('.navbar-fixed').addClass('bg-primary');
                } else {
                    setTimeout(function() {
                        $('nav.navbar').not('.navbar-fixed').delay(200).removeClass('bg-primary');
                    }, 200);
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).on('show.bs.dropdown', '.nav-item', function (event) {
            console.log($(event.relatedTarget));
          $(event.relatedTarget).addClass('bg-primary-light');
        });

        $(document).on('hide.bs.dropdown', '.nav-item', function (event) {
            $(event.relatedTarget).removeClass('bg-primary-light');
        });
    </script>
    @stack('scripts')
</body>
</html>
