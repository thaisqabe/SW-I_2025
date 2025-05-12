<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;



        public function Sacar($valor){
            if ($this->Saldo < $valor){
                $mensagem = "Saldo insuficiente.";
                return $mensagem;
            } else{
                $this->Saldo = $this->Saldo - $valor;
                $textosaq ='Saque realizado. Saldo atual é de R$' . $this->Saldo;
                return $textosaq;
            }

            return $this->Saldo;
        }
    

        public function Depositar($valor){
            $this->Saldo += $valor;
            $texto ='Depósito realizado. Saldo atual é de R$' . $this->Saldo;
            return $texto;
        }

        public function MostrarSaldo(){
        
            echo "O nome do cliente é " . $this->Nome . " o CPF é " . $this->Cpf . " e o valor do saldo é R$" . $this->Saldo;
        }
    }

 
?>