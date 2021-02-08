@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container">
	<div class="row">
		<div class="col-12 mb-5">
			@title(['text' => 'ASSESSORIA E CONSULTORIA EMPRESARIAL', 'group' => 'Nossas práticas'])

			<p>Listamos alguns dos aspectos serem mais relevantes sob o ponto de vista preventivo para empresas que buscam resguardar o seu patrimônio, imagem e relacionamentos:</p>

			<ul class="mb-4">
				<li>Contratos sólidos perante clientes, parceiros, funcionários, prestadores de serviços e fornecedores</li>
				<li>Regularidades das atividades perante o Poder Público</li>
				<li>Contratos de locação empresarial equilibrados</li>
				<li>Construção segura de imagem perante o seu mercado consumidor e solidificação da marca</li>
				<li>Adequação do tipo societário com as atividades empresariais desenvolvidas</li>
				<li>Planejamento tributário para redução da carga tributária e aumento da margem de lucro</li>
			</ul>
		</div>
	</div>
	@include('sections.cta')
</section>
@endsection