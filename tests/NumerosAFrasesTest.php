<?php

use PHPUnit\Framework\TestCase;

class NumerosAFrasesTest extends TestCase
{
    
    protected $no_mult_x_3y5  = 43;  
    protected $multiplo_x_3   = 12;
    protected $multiplo_x_5   = 20;
    protected $multiplo_x_3y5 = 30;
    
    public function test_cambia_multiplos_3_x_5(){

        require "app/NumerosAFrases.php";

        $num_frases = new NumerosAFrases();

        //un número cualquiera
        $this->assertEquals($num_frases->cambia_multiplos_3_x_5($this->no_mult_x_3y5), $this->no_mult_x_3y5);

        //multiplo de 3
        $this->assertEquals($num_frases->cambia_multiplos_3_x_5($this->multiplo_x_3), "Linio");

        //multiplo de 5
        $this->assertEquals($num_frases->cambia_multiplos_3_x_5($this->multiplo_x_5), "IT");

        //multiplo de 3 y de 5
        $this->assertEquals($num_frases->cambia_multiplos_3_x_5($this->multiplo_x_3y5), "Linianos");

    }



}