@extends('layouts.app')

@push('header')

@endpush

@section('content')

@include('principal.lead')
@include('principal.intro')
@include('principal.porque')
{{-- @include('principal.praticas') --}}
@include('principal.quem')
@include('principal.testimonials')

@endsection

@push('scripts')
<script type="text/javascript">

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
@endpush