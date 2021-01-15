@extends('layouts.app')

@push('header')
<style type="text/css">
</style>
@endpush

@section('content')

@include('principal.lead')
@include('principal.porque')
{{-- @include('principal.praticas') --}}
@include('principal.quem')

@endsection

@push('scripts')
<script type="text/javascript">
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
	  let opacity = 1-scrollTop/600;

	  $(id).css({
	  	transform: 'translateY('+translate+'px)',
	  	opacity: opacity
	  });
	}
}
</script>
@endpush