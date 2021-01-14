<section class="container mb-5" id="contato">
    <div class="row py-5">
		<div class="col-lg-6 col-md-6 col-12 mx-auto">
            <h1 class="mb-5">Entre em contato</h1>
			<form method="" action="" class="mb-4">
				@csrf
				<div class="form-group">
					<input type="text" name="nome" class="form-control border-0 bg-light p-3 rounded-0" placeholder="Nome completo">
				</div>
				<div class="form-group">
					<input type="text" name="email" class="form-control border-0 bg-light p-3 rounded-0" placeholder="Email">
				</div>
				<div class="form-group">
					<textarea class="form-control border-0 bg-light p-3 rounded-0" placeholder="Deixe a sua mensagem aqui"></textarea>
				</div>
				<button type="submit" class="btn btn-primary rounded-0">Envie a mensagem</button>
			</form>
			<div>
				<p class="text-muted mb-2"><a href="(21) 9952-852-74" class="link-none"><i class="fab fa-whatsapp text-primary" style="font-size: 110%"></i> (21) 9952-852-74</a></p>
				<p class="text-muted"><a href="mailto:contato@cultiva.cc" class="link-none"><i class="far fa-envelope text-primary"></i> contato@cultiva.cc</a></p>
			</div>
		</div>
{{-- 		<div class="col-lg-6 col-md-6 col-12">
			<div class="d-flex flex-center h-100 p-6 position-relative">
				<div class="absolute-top-left text-grey p-4 opacity-4" style="z-index: -1"><i class="fas fa-quote-left fa-5x"></i></div>
				<blockquote class="blockquote m-0">
		            <h3>O grande perigo em tempos de turbulência não é a turbulência emsi, mas agir com a lógica passada.</h3>
		            <footer class="blockquote-footer">Peter Drucker</footer>
		        </blockquote>
	        </div>
		</div> --}}
    </div>
</section>