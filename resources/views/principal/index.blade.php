@extends('layouts.app')

@push('header')
@endpush

@section('content')

  @include('principal.lead')
  @include('principal.intro')
  @include('principal.porque')
  @include('principal.quem')
  @include('principal.testimonials')

  <div class="container">
    @include('sections.cta')
  </div>

@endsection

@push('scripts')
<script src="{{ asset('js/vendor/clamp.min.js') }}"></script>
<script type="text/javascript">
// $('.testimonial-text').each(function() {
//   $clamp(this, {clamp: 6});
// });
  var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      width: 326,
      initialSlide: $('.swiper-slide').length/2,
      spaceBetween: 30,
      centeredSlides: true,
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
  });

$(window).scroll(function() {
  let scrollTop = $(this).scrollTop();

  zoomBackground('#lead-bg', scrollTop);
  moveText('#lead-text', scrollTop);
});

function zoomBackground(id, scrollTop)
{
	if (! onMobile()) {
	  let zoom = 100 + (scrollTop / 15);
	  $(id).css('background-size', zoom+'%');
	}
}

function moveText(id, scrollTop)
{
	if (! onMobile()) {
	  let translate = -0.2*scrollTop;

	  $(id).css({
	  	transform: 'translateY('+translate+'px)',

	  });
	}
}

</script>

<script type="text/javascript">
var bg = 1;
$('#switch-bg').click(function() {
  let url = $(this).data('bg'+bg);
  $('#lead-bg').css('background-image', 'url('+url+')');

  if (bg == 3) {
    bg = 1;
  } else {
    bg += 1;
  }
});
</script>

    <script type="text/javascript">
        var firstScreen = $('#lead-bg').offset().top + $('#lead-bg').height();
        var $menu = $('nav.navbar')
                        .clone()
                        .hide()
                        .appendTo('body')
                        .addClass('navbar-fixed shadow-sm bg-primary animate__fadeInDown')
                        .removeClass('position-absolute');

        $('nav.navbar-fixed .navbar-brand img.logo-lg').remove();
        $('nav.navbar-fixed .navbar-brand img.logo-sm').removeClass('d-sm-none');

        $(window).scroll(function() {
            let scrollTop = $(this).scrollTop();

            if (scrollTop > firstScreen) {
                $menu.show();
            } else {
                $menu.fadeOut('fast');
            }
        });
    </script>
@endpush