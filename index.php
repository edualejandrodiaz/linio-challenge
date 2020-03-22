<?php

for($i=1; $i <= 100; $i++){
	
	
	$n3_1 = $i % 3;
	$n5_1 = $i % 5;
	
	$mensaje = $i."<br>";
		
	if($n3_1 * $n5_1 == 0){
		
		$total = 3 * max(0, min (1, 1-$n3_1) ) + 5 * max(0, min (1, 1-$n5_1) );
	
		switch( $total )
		{
			case 3:
				$mensaje = $i." Linio<br>";
			break;
			case 5:
				$mensaje = $i." IT<br>";
			break;
			case 8:
				$mensaje = $i." Linianos<br>";
			break;
		}
	
	}
	
	echo $mensaje;
}



?>