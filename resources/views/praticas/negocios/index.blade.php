@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container">
	<div class="row">
		<div class="col-12 mb-5">
			@title(['text' => 'PARA NEGÓCIOS', 'group' => 'Nossas práticas'])

			<p>Com um olhar direcionado e estratégico, desenvolvido por mais de uma década de advocacia, temos conhecimento para contribuir para o seu negócio de forma eficiente e moderna.</p>

			<ul class="mb-4">
				<li>Criação e adaptação de modelos de negócios</li>
				<li>Planejamento estratégico empresarial</li>
				<li>Otimização e padronização de processos internos</li>
				<li>Consultoria e projetos</li>
				<li>Adaptação para negócios replicáveis</li>
				<li>Cultura organizacional</li>
				<li>Implementação de setor jurídico</li>
				<li>Gestão de crise</li>
			</ul>

			<p>Sem sombra de dúvida essa prática nos distingue dos demais escritórios de advocacia, pois atuamos com uma consultoria em negócios direcionada especificamente às atividades empresariais dos nossos clientes. Trabalhamos desde os objetivos iniciais para novos negócios, passando pelo planejamento, até empresas consolidadas com necessidades de remodelar o desenvolvimento de suas atividades.</p>
		</div>
	</div>

	@include('sections.cta')
</section>

@endsection