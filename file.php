<?php
function validaCPF($cpf){
	
	if( $cpf == '00000000000' ||
			$cpf == '11111111111' ||
			$cpf == '22222222222' ||
			$cpf == '33333333333' ||
			$cpf == '44444444444' ||
			$cpf == '55555555555' ||
			$cpf == '66666666666' ||
			$cpf == '77777777777' ||
			$cpf == '88888888888' ||
			$cpf == '99999999999') {
				
				return true;
				
			}else{
				
				$erro = false;
				$aux_cpf = "";
				for ($j = 0; $j < strlen($cpf); $j++)
					if (substr($cpf, $j,1) >= "0" AND substr($cpf, $j,1) <= "9")
						$aux_cpf .= substr($cpf,$j,1);
						if (strlen($aux_cpf)!= 11)
							$erro = true;
							else{
								$cpf1 = $aux_cpf;
								$cpf2 = substr($cpf, -2);
								$controle = "";
								$start = 2;
								$end = 10;
								for ($i = 1; $i <= 2; $i++)
								{
									$soma = 0;
									for ($j = $start; $j <= $end; $j++)
										$soma += substr($cpf1,($j-$i-1),1) * ($end+1+$i-$j);
										if ($i == 2)
											$soma += $digito * 2;
											$digito = ($soma * 10) % 11;
											if ($digito == 10)
												$digito = 0;
												$controle .= $digito;
												$start = 3;
												$end = 11;
								}
								if ($controle != $cpf2)
									$erro = true;
							}
							return $erro;
							
			}
			
}
