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

        </style>

        @stack('header')
    </head>
    <body>
        @if(request()->has('dev'))
          @include('layouts.header')
        @endif

        @yield('content')

        @if(request()->has('dev'))
            @include('layouts.footer')
        @endif
    <script src="{{ mix('js/app.js') }}"></script>

    <script type="text/javascript">
onMobile = function() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function login() {
  var pass = prompt("Para continuar, por favor entre com a sua senha");

  if (pass == "zelda") {
    window.location.href = "{{url()->current()}}"+'?dev';
  } else if (pass == '' || pass === null) {
    return;
  } else {
    console.log(pass);
    alert('Senha incorreta.');
  }
}

            $(document).ready(function() {
              $('button.navbar-toggler').on('click', function () {
                $('.animated-icon2').toggleClass('open');
              });
            });
    </script>

    @stack('scripts')
    </body>
</html>
