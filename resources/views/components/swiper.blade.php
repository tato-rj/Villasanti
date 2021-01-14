<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper mb-4 cursor-pointer">
        <!-- Slides -->
			@foreach($data as $array)
			@include($view, $array)
{{-- 			<div class="swiper-slide d-flex">
				<div class="card-gold d-flex justify-content-between flex-column" style="width: 280px">
					<div>
						<p class="text-muted clamp-3">CARD</p>
					</div>
				</div>
			</div> --}}
			@endforeach
    </div>

    <div class="swiper-pagination"></div>
</div>