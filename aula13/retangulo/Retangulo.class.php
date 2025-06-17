<?php

    class Retangulo{
        private $Largura;
        private $Altura;

        public function __construct($largura, $altura){
            $this->Largura = $largura;
            $this->Altura = $altura;
        }

        public function setLargura($largura){
            $this->Largura = $largura;
        }

        public function setAltura($altura){
            $this->Altura = $altura;
        }

        public function getLargura(){
            return $this->Largura;
        }

        public function getAltura(){
            return $this->Altura;
        }


        public function calcularArea(){
            $area = $this->getLargura() * $this->getAltura();
            return $area;
        }

        public function calcularPerimetro(){
            $perimetro = ($this->getLargura()*2)+($this->getAltura()*2);
            return $perimetro;
        }

        public function exibirResultados(){
            $area = $this->calcularArea();
            $perimetro = $this->calcularPerimetro();

            echo "<p>A área do retângulo é: " . $area . " e o perímetro é: " . $perimetro . "</p>";
        }
    }

?>