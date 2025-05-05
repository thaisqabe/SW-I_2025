<?php
    class Carro{
        public $Marca;
        public $Modelo;
        public $Combustivel;
        public $Portas;
        public $CapacidadeTanque;

   

    public function MostrarDados(){
        echo "A marca é: " . $this->Marca . "<br>";
        echo "O modelo é: " . $this->Modelo . "<br>";
        echo "O combustível é: " . $this->Combustivel . "<br>";
        echo "As portas são: " . $this->Portas . "<br>";
        echo "A capacidade do tanque é: " . $this->CapacidadeTanque . " litros <br>";
        echo "<hr>";



    }
}

?>