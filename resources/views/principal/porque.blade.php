<section class="container mb-6">
	@include('principal.components.title', ['text' => 'Porque nos contratar?'])
	<div class="row">
		@include('principal.components.porque-card', [
			'title' => 'Exclusividade', 
			'text' => 'Desenvolvemos soluções de acordo com o que o seu negócio precisa. Feito especialmente para a sua empresa.'])
		@include('principal.components.porque-card', [
			'title' => 'Fazemos acontecer', 
			'text' => 'A iniciativa é a marca do nosso trabalho. Atuamos nos antecipando aos problemas.'])
		@include('principal.components.porque-card', [
			'title' => 'Advocacia descomplicada', 
			'text' => 'Advocacia simplificada, ágil e livre de morosidade. Comunicação acessível e transparente. Você sempre saberá o que está acontecendo.'])
	</div>
</section>