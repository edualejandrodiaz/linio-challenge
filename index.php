<?php


require "app/NumerosAFrases.php";


$numero_frase = new NumerosAFrases();


for($i=1; $i <= 100; $i++){

	echo $i." --> ".$numero_frase->cambia_multiplos_3_x_5($i)."<br>";		

}




?>