@php($main = request()->route()->getName() == 'principal')

<div id="menu" style="{{! $main ? 'padding-bottom: 120px' : null}}">
  <nav class="navbar {{$main ? 'position-absolute' : 'position-fixed'}} w-100 z-10 t-2 navbar-expand-lg p-0 navbar-dark {{! $main ? 'bg-primary' : null}}">
    <a class="navbar-brand ml-2" href="{{route('principal')}}">
        <img class="d-none {{$main ? 'd-sm-block' : null}} position-absolute logo-lg" src="{{asset('images/brand/logo-dark.svg')}}" style="width: 262px; top: 16px">
        <img class="{{$main ? 'd-sm-none' : null}} ml-3 logo-sm" src="{{asset('images/brand/logo-sm-dark.svg')}}" style="width: 62px">
    </a>

    @include('layouts.components.hamburger')

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link p-4" href="{{route('principal')}}">Principal</a>
        </li>
        <li class="nav-item position-relative">
          <a class="nav-link dropdown-toggle p-4" data-toggle="dropdown" href="#">Nossas práticas</a>
          <div class="dropdown-menu bg-primary-light rounded-0 border-0 animate__animated animate__fadeInUp animate__faster">
            <a class="dropdown-item text-white py-2" href="{{route('praticas.processos')}}">Processos Judiciais e as Empresas</a>
            <a class="dropdown-item text-white py-2" href="{{route('praticas.assessoria')}}">Assessoria e Consultoria Empresarial</a>
            <a class="dropdown-item text-white py-2" href="{{route('praticas.negocios')}}">Para Negócios</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link p-4" href="{{route('fundador')}}">Fundador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-secondary p-4" href="{{mailto('Contato pelo website')}}">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
</div>