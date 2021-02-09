<section class="overflow-hidden py-5 mb-5">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			@foreach($testimonials as $testimonial)
			<div class="swiper-slide px-4">
				<div class="w-100">
					<p class="testimonial-text">{{$testimonial['content']}}</p>
					<footer class="blockquote-footer font-serif text-right">{{$testimonial['author']}}</footer>
				</div>
			</div>
			@endforeach
		</div>

		<div class="swiper-nav">	    
		    <div class="swiper-button-prev swiper-navigation-arrow position-relative m-0"></div>
			<div class="swiper-pagination d-none d-md-flex"></div>
		    <div class="swiper-button-next swiper-navigation-arrow position-relative m-0"></div>
		</div>
	</div>
</section>