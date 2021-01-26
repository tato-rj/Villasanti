<div id="menu">
  <nav class="navbar position-absolute w-100 z-10 t-2 navbar-expand-lg p-0 navbar-dark">
    <a class="navbar-brand ml-2" href="{{route('home')}}">
        <img class="d-none d-sm-block position-absolute logo-lg" src="{{asset('images/brand/logo-dark.svg')}}" style="width: 262px; top: 16px">
        <img class="d-sm-none ml-3 logo-sm" src="{{asset('images/brand/logo-sm-dark.svg')}}" style="width: 62px">
    </a>

    @include('layouts.components.hamburger')

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link p-4" href="">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-4" href="">Áreas de atuação</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-4" href="">Fundador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-secondary p-4" href="">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
</div>