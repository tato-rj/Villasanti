@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container">
	<div class="row">
		<div class="col-12 mb-5">
			@title(['text' => 'PROCESSOS JUDICIAIS E AS EMPRESAS', 'group' => 'Nossas práticas'])

			<p>Alguns motivos comuns que podem causar processos judiciais para empresas:</p>

			<ul class="mb-4">
				<li>Quebra de contratos</li>
				<li>Empresa sem orientação jurídica</li>
				<li>Falta de contratos específicos ou não elaborados por advogado especialista</li>
				<li>Recolhimento tributário inadequado ou sem planejamento</li>
				<li>Reclamações trabalhistas</li>
				<li>Obrigações inadimplidas</li>
				<li>Disputas entre membros da mesma sociedade</li>
			</ul>

			<p>Os motivos para o surgimento de litígios empresariais não se limitam aos mencionados acima, mas esses são alguns dos motivos mais comuns que a sua empresa pode enfrentar. Sabemos que processos judiciais são uma realidade indesejada pelas empresas, entretanto, se isso ocorrer se torna essencial uma assessoria jurídica especializada para tratar do caso utilizando a melhor estratégia para alcançar os interesses da sua empresa.</p>
		</div>
	</div>
	@include('sections.cta')
</section>
@endsection