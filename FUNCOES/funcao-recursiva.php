<?php 

	// Função Recursuiva: Quando uma função chama a si mesmo. CUIDADO PARA NÃO CAIR EM LOOPING
		// Somente em algumas situações usamos funções recursivas, melhor resolver com if, while, for each que irá exigir menos do código.

	
	$hierarquia = array(

		array(
			'nome_cargo'=>'CEO',
			'subordinados'=>array(
				// INICIO: Diretor Comercial
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						// INICIO: Gerente de Vendas
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
						// TERMINO: Gerente de Vendas
					)
				),
				// TERMINO: Diretor Comercial
				// INICIO: Diretor Financeiro
				array(
					'nome_cargo'=>'Diretor Financeiro',
					'subordinados'=>array(
						// Inicio: Gerente de contas a pagar.
						array(
							'nome_cargo'=>'Gerente de contas a pagar',
							'subordinados'=>array(
								//Inicio: Supervisor de pagamentos
								array(
									'nome_cargo'=>'Supervisor de Pagamentos'
								)
								//Termino: Supervisor de pagamentos
							)
						),
						// Termino: Gerente de contas a pagar.
						// Inicio: Gerente de compras
						array(
							'nome_cargo'=>'Gerente de compras',
							'subordinados'=>array(
								//Inicio: supervisor de suprimentos
								array(
									'nome_cargo'=>'Supervisor de Suprimentos'
								)
								// Termino: supervisor de suprimentos
							)
						)
					)
					// Termino: Gerente de compras
				)
				// TERMINO: Diretor Financeiro
			)
		)
	);
	
	function exibe($cargos){

		$html = "<ul>";

		foreach ($cargos as $cargo) {
			
			$html .= "<li>";
			$html .= $cargo['nome_cargo'];
			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

				$html .= exibe($cargo['subordinados']);

			}

			$html .= "</li>";

		}

		$html .= "</ul>";

		return $html;

	}

	echo exibe($hierarquia);

?>