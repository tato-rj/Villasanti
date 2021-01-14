<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/primer.css') }}" rel="stylesheet">


        <style type="text/css">
            body {background-color: transparent;}

            h1, h2 {font-weight: 900;}
  
            h3 {font-family: 'Nunito', sans-serif; font-weight: 600;}

            input, textarea, button {
              font-size: 100%!important;
              height: auto!important;
            } 

            .text-primary {
                color: #d83f87 !important;
            }

            .btn {letter-spacing: .5px}

            .btn-primary {
                background-color: #d83f87;
                border-color: #d83f87;
            }

            .btn-primary:hover {
                color: #fff;
                background-color: #d83f87;
                border-color: #d83f87;
            }

            .btn-primary:focus,
            .btn-primary.focus {
              color: #fff;
              background-color: #d83f87!important;
              border-color: #d83f87!important;
              box-shadow: 0 0 0 0.2rem rgba(0, 175, 118, 0.5)!important;
            }

            .btn-outline-white {
                background-color: transparent;
                border-color: white;
                color: white;
            }

            .btn-outline-white:hover {
                color: white;
                background-color: #683b30;
                border-color: #683b30;
            }

            .btn-outline-white:focus,
            .btn-outline-white.focus {
              color: white;
              background-color: #683b30!important;
              border-color: #683b30!important;
              box-shadow: #683b30!important;
            }

            .bg h2 {
                margin-bottom: 120px;
            }

            #logo {
                width: 260px;
            }

            body {
                font-size: 106%;
            }

            .vl {
              height: 100px;
              width: 100%;
              position: relative;                
            }

            .vl .line {
              border-left: 1px solid lightgrey;
              position: absolute;
              left: 50%;
              top: 0;
              height: 100%;
            }

            .shadow-center, .hover-shadow:hover {
                box-shadow: 0 0 2rem rgba(0,0,0,.05) !important;
            }

/*            .service div, .service p {
              transition: .2s;
            }

            .service:hover > div {
              transform: scale(.8);
              opacity: .1;
            }

            .service:hover > p {
              transform: translateY(-200%);
            }*/
        </style>

        @stack('header')
    </head>
    <body>
        @if(request()->has('dev'))
        <header class="container-fluid position-absolute"  style="z-index: 100">
            @include('layouts.header')
        </header>
        @endif

        @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>

    <script type="text/javascript">
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
    </script>

    @stack('scripts')
    </body>
</html>
