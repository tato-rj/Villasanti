<?php

namespace App;

class Testimonials
{
	protected $testimonials = [
		[
			'author' => 'Paulo Paiva, CEO da BE CAPITAL', 
			'content' => 'A Villasanti Advocacia nos assessorou em um momento crucial no desenvolvimento da nossa empresa para atuação no mercado de capitais. Recomendo sem pensar duas vezes!'
		],
		[
			'author' => 'Gustavo Lopes, CEO do Ensino+O2', 
			'content' => 'É fundamental que pequenas e médias empresas contem com um olhar externo para poderem se organizar melhor. O advogado Hilton Villasanti foi muito importante para nos auxiliar nos planejamentos tributários, na utilização de ferramentas de BPO, etc. O trabalho dele vai além dos serviços jurídicos: é uma consultoria empresarial. Recomendo.'
		],
		[
			'author' => 'OXIGENE-SE', 
			'content' => 'Contamos com os serviços do advogado Hilton Villasanti em nossa rotina diária, o que nos deu segurança para tomar melhores decisões, sobretudo sobre planejamento de negócios.'
		],
		[
			'author' => 'CULTIVA', 
			'content' => 'Profissional excepcional que trabalha muito atento às necessidades do meu negócio. Sua experiência e sua visão perspicaz transmitem uma confiança indispensável para a Cultiva. Uma grata parceria comercial que desejo que se perpetue por muitos anos.'
		],
		[
			'author' => 'Marcia Fernandes, ABRC', 
			'content' => 'Excelente Advogado! Condutas extremamente profissionais, claras, objetivas e com resultados positivos. Super recomendo!'
		],
		[
			'author' => 'PRESENT POINT', 
			'content' => 'O Dr. Villasanti participou de todo o processo desde o planejamento até o acompanhamento dos resultados da empresa. Sem dúvida foi uma escolha de sucesso!'
		],
		[
			'author' => 'TECNOTOOLS', 
			'content' => 'Sem dúvida a melhor assessoria para tratar do planejamento da nossa empresa e retomada dos negócios.',
		],
		[
			'author' => 'Grupo Matta',
			'content' => 'Hilton e toda equipe do Villasanti Advocacia prestam um excelente serviço jurídico a minha empresa. Com muito cuidado e zelo com os casos analisados, sinto que a relação com meus clientes e com a minha empresa não poderiam estar em melhores mãos. Profissional competente e de qualidade o qual indico a todas as empresas e clientes que buscam sempre o melhor para seus negócios e relações jurídicas em geral.'
		]
	];

	public function all()
	{
		shuffle($this->testimonials);

		return $this->testimonials;
	}
}