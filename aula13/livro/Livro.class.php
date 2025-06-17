<?php

class Livro
{
    private $Titulo;
    private $Autor;
    private $Disponivel;

    public function __construct($titulo, $autor, $disponivel = false)
    {
        $this->Titulo = $titulo;
        $this->Autor = $autor;
        $this->Disponivel = $disponivel;
    }

    public function getTitulo()
    {
        return $this->Titulo;
    }

    public function getDisponivel()
    {
        return $this->Disponivel;
    }

    public function emprestarLivro()
    {
        if ($this->Disponivel == true) {
            $this->Disponivel = false;
        } else {
            echo "Não foi possível emprestar o livro";
        }
    }

    public function devolverLivro()
    {
        $this->Disponivel = true;
        echo "Obrigada pela devolução";
    }

    public function exibirStatus()
    {
        $titulo = $this->getTitulo();

        if ($this->getDisponivel() == true) {
            $disponivel = "Disponível";
        } else {
            $disponivel = "Emprestado";
        }

        return "O livro: $titulo está: $disponivel";
    }
}
