@extends('layouts.app')

@push('header')

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<style type="text/css">
    .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
        bottom: 0px;
        left: 0;
        width: 100%;
    }
    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #d83f87;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
      padding-bottom: 2em;
    }

    .swiper-slide {
      text-align: center;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
</style>
@endpush

@section('content')

<main> 
    <div>
        <div class="container-fluid position-relative" style="background-image: url({{asset('images/backgrounds/cultiva-bg.jpg')}}); background-size: cover; background-position: center; height: 100vh">
            <div class="row w-100 align-items-center justify-content-center h-100">
                <div class="col-lg-8 col-md-10 col-10 mx-auto">
                    <div class="text-center pt-4">
                        <h1 class="mb-4 text-white" style="">Cultivamos uma nova cultura de consciência e cuidado nas organizações</h2>
                        <a href="" class="btn px-4 btn-primary btn-lg rounded-0">Entre em contato com a nossa equipe</a>
                    </div>
                </div>
            </div>
            <div class="position-absolute" style="left: 50%; bottom: 20px; transform: translateX(-50%);"><i class="fas fa-chevron-down text-white fa-lg" style="opacity: 0.4"></i></div>
        </div>
    </div>
</main>

<section style="background-color: #0b0621">
    <div class="container pt-7 pb-5 mb-4" id="o-que-fazemos">
        <div class="row">
            <div class="col-12 text-white text-center mb-5">
                <h3 class="m-0">Ajudamos a criar soluções para a sua organização</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-12 text-white" style="opacity: .8">
                <div class="py-2"><i class="fas fa-check mr-2"></i>Processos sistematizados conforme a necessidade do seu negócio</div>
                <div class="py-2"><i class="fas fa-check mr-2"></i>Equipe motivada e engajada</div>
                <div class="py-2"><i class="fas fa-check mr-2"></i>Cultura do cuidado</div>
             </div>
             <div class="col-lg-6 col-md-6 col-12 text-white" style="opacity: .8">
                <div class="py-2"><i class="fas fa-check mr-2"></i>Estrutura organizacional humanizada e responsiva</div>
                <div class="py-2"><i class="fas fa-check mr-2"></i>Gestão participativa</div>
                <div class="py-2"><i class="fas fa-check mr-2"></i>Desenvolvimento de lideranças</div>
            </div>
        </div>
    </div>
</section>

@include('welcome.services')

{{-- @include('welcome.bio') --}}

@include('welcome.works')

@include('welcome.stats')

@include('welcome.contact')

<footer class="py-5 border-top">
    <div class="text-center text-muted">
        <img class="mb-2" src="{{asset('images/logo.svg')}}" style="width: 122px">
        <div><small>TODOS OS DIREITOS RESERVADOS</small></div>
    </div>
</footer>
{{-- <div class="vl">
    <div class="line"></div>
</div> --}}

@endsection

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 20,
        loop: true,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 20
    },
    1092: {
      slidesPerView: 4,
      spaceBetween: 20
    }
  }
    });
  </script>
@endpush