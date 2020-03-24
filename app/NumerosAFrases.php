<?php

class NumerosAFrases {

    

    public function cambia_multiplos_3_x_5(int $numero, int $mu1t_1 = 3, int $mult_2 = 5){

        $case1 = $mu1t_1;
		$case2 = $mult_2;
		$cases = $mu1t_1 + $mult_2;
		
		
		$rm_1 = $numero % $mu1t_1;
		$rm_2 = $numero % $mult_2;
        
        $mensaje = $numero;
			
		if($rm_1 * $rm_2 == 0){
			
			$total = $mu1t_1 * max(0, min (1, 1-$rm_1) ) + $mult_2 * max(0, min (1, 1-$rm_2) );
		
			switch( $total )
			{
				case $case1:
					$mensaje = "Linio";
				break;
				case $case2:
					$mensaje = "IT";
				break;
				case $cases:
					$mensaje = "Linianos";
                break;
                default:
                    $mensaje = null;
                break;
                
			}
		
		}
		
		return $mensaje;
	

    }


}