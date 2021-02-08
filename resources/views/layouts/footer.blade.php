<footer>
	<div class="bg-align-center position-relative" style="background-image: url({{asset('images/backgrounds/columns.jpg')}});">
		<div class="h-100 w-100 bg-primary opacity-8 position-absolute" style="left: 0"></div>
		<div class="container py-6">
			<div class="row text-white">
				<div class="col-lg-6 col-md-8 col-12 mx-auto text-center mb-3">
					<img src="{{asset('images/brand/logo-dark.svg')}}" style="width: 260px" class="mb-4">
					<p class="opacity-6">Advocacia simplificada, ágil e livre de morosidade. Comunicação acessível e transparente. Você sempre saberá o que está acontecendo.</p>
				</div>
				<div class="col-12 text-center mb-4">
					<a href="" class="btn btn-lg btn-secondary">Entre em contato com a nossa equipe</a>
				</div>
				<div class="col-12 mx-auto text-center">
		            <a class="d-block d-md-inline" href="{{route('praticas.processos')}}">Processos Judiciais e as Empresas</a> <span class="mx-2 d-none d-md-inline">|</span>
		            <a class="d-block d-md-inline" href="{{route('praticas.assessoria')}}">Assessoria e Consultoria Empresarial</a> <span class="mx-2 d-none d-md-inline">|</span>
		            <a class="d-block d-md-inline" href="{{route('praticas.negocios')}}">Para Negócios</a>
				</div>
			</div>
		</div>
	</div>
	<div class="p-2 d-flex bg-primary-dark">
		<div class="container">
			<div class="d-flex d-apart text-white opacity-6">
				<div><small>© {{now()->year}} Todos os direitos reservados.</small></div>
				<div class="d-flex">
					<a href="" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'instagram'])</a>
					<a href="" target="_blank" class="t-2">@fa(['fa_type' => 'b', 'icon' => 'linkedin'])</a>
				</div>
			</div>
		</div>
	</div>
</footer>