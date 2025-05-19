<?php 

    class Produto {
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome, $preco= 0, $quantidade = 0){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $quantidade;

        }

        public function getNome(){
            return $this->Nome;
        }

        public function getPreco(){
            return $this->Preco;
        }

        public function setNome($nome){
            $this->Nome = $nome;
        }

        public function setPreco($preco){
            if ($preco >= 0 ){
                $this->Preco = $preco;
            }else{
                echo "Valor inválido.";
            }
        }

        public function adicionarEstoque($qtd){
            $this->Quantidade += $qtd;
        }

        public function removerEstoque($qtd){
            if ($qtd > 0 && $qtd <= $this->Quantidade){
                $this->Quantidade -=$qtd;
            }else{
                echo "Quantidade inválida.";
            }
        }

        public function MostrarDetalhes(){
            echo "Nome: " . $this->Nome ."<br>";
            echo "Preço: "  . $this->Preco  ." <br>";
            echo "Quantidade em estoque: " . $this->Quantidade . " <br> <hr>";

        }
    }

?>