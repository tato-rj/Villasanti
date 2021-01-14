<section class="bg-light pb-5">
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 py-5">
                <h1 class="m-0">Onde já cultivamos</h1>
            </div>
            <div class="col-12">
  <div class="swiper-container">
    <div class="swiper-wrapper">
            @include('components.company', ['name' => 'LAVRA', 'filename' => 'lavra'])
            @include('components.company', ['name' => 'Polimotores', 'filename' => 'polimotores'])
            @include('components.company', ['name' => 'Araujo & Villasanti', 'filename' => 'araujoevillasanti'])
            @include('components.company', ['name' => 'ICMBIO', 'filename' => 'icmbio'])
            @include('components.company', ['name' => 'ENSP', 'filename' => 'ensp'])
            @include('components.company', ['name' => 'Acesso Fácil Brasil', 'filename' => 'acessofacil'])
            @include('components.company', ['name' => 'Metropolis', 'filename' => 'metropolis'])
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

            </div>

        </div>
    </div>
</section> 