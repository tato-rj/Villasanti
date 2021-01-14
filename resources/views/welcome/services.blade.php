<div class="position-relative">
    <section class="container mb-7" id="servicos">
        <div class="row">
            <div class="col-12 py-5">
                <h1 class="m-0">Serviços</h1>
            </div>
            <div class="col-lg-10 col-md-10 col-12 mx-auto">
                <div class="row"> 
                    @include('components.service', ['icon' => 'gestao', 'label' => 'Estruturação de Modelos de Gestão'])
                    @include('components.service', ['icon' => 'cultura', 'label' => 'Desenho de Cultura Organizacional'])
                    @include('components.service', ['icon' => 'elaboracao', 'label' => 'Elaboração e Facilitação de Projetos'])
                    @include('components.service', ['icon' => 'planejamento', 'label' => 'Planejamento Estratégico Participativo'])
                    @include('components.service', ['icon' => 'lideranca', 'label' => 'Formação de Lideranças'])
                    @include('components.service', ['icon' => 'colaboracao', 'label' => 'Treinamento em Criação colaborativa de projetos'])
                    @include('components.service', ['icon' => 'consultoria', 'label' => 'Consultoria organizacional'])
                </div>
            </div>
{{--             <div class="col-lg-6 col-md-6 col-12">
                <div class="p-5">
                    <h3 class="mb-3">
                        72% das pessoas estão <u>insatisfeitas</u> com o trabalho. <span style="text-decoration: line-through;">Dinheiro</span> não é o principal motivador de felicidade na empresa, mas sim a <span class="text-primary">Cultura</span>.
                    </h3>
                    <h3 class="m-0 text-muted">
                        Um bom salário é importante, mas o ambiente de trabalho e a oportunidade de crescimento tem sido mais valorizados.
                    </h3>
                </div>
            </div> --}}
        </div>
    </section>
</div>