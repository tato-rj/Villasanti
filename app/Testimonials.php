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
			'content' => 'O advogado Hilton Villasanti foi muito importante para nos auxiliar nos planejamentos tributários, na utilização de ferramentas de BPO, etc. O trabalho dele vai além dos serviços jurídicos: é uma consultoria empresarial. Recomendo.'
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
			'content' => 'Sem dúvida a melhor assessoria para tratar do planejamento da nossa empresa e retomada dos negócios.'
		]
	];

	public function all()
	{
		shuffle($this->testimonials);

		return $this->testimonials;
	}
}