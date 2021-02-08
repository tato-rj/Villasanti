<section class="container mb-6">
	@title(['text' => 'Para quem fazemos a diferença'])
	<div class="row pt-4">
		<div class="col-lg-8 col-md-8 col-12 text-right">
			@include('principal.components.quem-row', [
				'title' => 'Novos Negócios',
				'text' => 'Prezamos em trabalhar assessorando novos negócios e sabemos da importância de colocar sua empresa no mundo! Estamos aqui para ajudá-lo nessa empreitada.'])
			@include('principal.components.quem-row', [
				'title' => 'Empresários',
				'text' => 'Sabemos que o foco dos empreendedores está no desenvolvimento do negócio, por isso assessoramos a sua empresa desde os aspectos contratuais até as estruturas mais complexas, como a fusão, cisão, transformação e incorporação de empresas.'])
			@include('principal.components.quem-row', [
				'title' => 'Pequenas e Médias empresas',
				'text' => 'São muitas as relações estabelecidas pelas empresas, com clientes, fornecedores, parceiros comerciais e locações empresariais. Trabalhamos com elaboração e consultoria em contratos para estabelecer essas relações de forma segura e preventiva para a sua empresa.'])
			@include('principal.components.quem-row', [
				'title' => 'Startups',
				'text' => 'Nossa consultoria para Startups abrange a estruturação empresarial, contratos, elaboração de projetos e assessoria junto a investidores, aceleradoras e captação de recursos.'])
			@include('principal.components.quem-row', [
				'title' => 'Agências de investimento',
				'text' => 'Assessoramos companhias de capital aberto e fechado com a emissão de papéis, acordo de acionistas e demais aspectos societários.'])
			@include('principal.components.quem-row', [
				'title' => 'Empresas com processos judiciais',
				'text' => 'Destacamos-nos nesse campo por já termos atuado nos dois lados da mesa e nos mais variados tipos de demandas judiciais que uma empresa pode enfrentar.',
				'mb' => 0])
		</div>
		<div class="col-lg-4 col-md-4 col-12 row pt-2 pb-4 pl-4">
			<div class="col-12 bg-align-center" style="background-image: url({{asset('images/backgrounds/banner.jpg')}});"></div>
		</div>
	</div>
</section>