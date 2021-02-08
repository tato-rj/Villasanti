@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container">
	<div class="row mb-5">
		<div class="col-12">
			@title(['text' => 'HILTON VILLASANTI', 'group' => 'Fundador'])
		</div>
		<div class="col-lg-8 col-md-6 col-12 order-lg-1 order-md-1 order-2">
			<div class="mb-5">
				<p>O advogado Hilton Villasanti R. Jr. possui mais de uma década de dedicação exclusiva à advocacia, com ênfase em consultoria e assessoria jurídica para empresas. Atuou em diversas modalidades no campo empresarial e mundo dos negócios, com experiência na representação de multinacionais nos campos consultivo e contencioso.</p>

				<p>Ao longo de sua jornada profissional, coordenou inúmeros projetos como consultor de negócios para pequenas e médias empresas e também inovando em suas iniciativas voltadas para o desenvolvimento de startups.</p>

				<p>Por também ser empresário compreende muito bem as nuances necessárias para um empreendimento bem sucedido, motivo pelo qual se dedica ao desenvolvimento de novos negócios, assessorando empresários e empresas em atividade.</p>

				<p>Atua também como membro da comissão de Gestão Jurídica da OAB/RJ.</p>
			</div>

			<div class="mb-5">
				<h2 class="text-primary">Formação Acadêmica</h2>
				<ul class="mb-4">
					<li>Master of Laws em Direito Corporativo pelo Ibmec-RJ</li>
					<li>Pós-Graduado em Direito Processual Civil e Gestão Jurídica pelo Ibmec-RJ</li>
					<li>Pós-Graduado em Direito Processual Civil pela Universidade Cândido Mendes-RJ</li>
					<li>Pós-Graduado em Direito Público e Tributário pela Universidade Cândido Mendes-RJ</li>
					<li>Bacharelado em Direito pela UNESA-RJ</li>
				</ul>
			</div>

			<div>
				<h2 class="text-primary">Extensão:</h2>
				<ul class="mb-4">
					<li>Direito para Startups e empreendedores pela FGV-RJ</li>
					<li>Direito Processual Civil pela PUC-RJ</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-10 mx-auto order-lg-2 order-md-2 order-1">
			<img class="w-100 mb-5" src="{{asset('images/hilton/fundador.jpg')}}">
		</div>
	</div>
	@include('sections.cta')
</section>
@endsection