<?php
namespace MODEL;
class Emprestimo{
    private ?int $id;
    private ?string $livro;
    private string $membro;
    private ?string $bibliotecario;
    private ?string $dataemprestimo;
    private ?string $datadevolucao;

    public function __construct(){}

    public function getID(){
       return $this->id;
    }
    public function setID(int $id){
         $this->id = $id;
    }
    public function getLivro(){
        return $this->livro;
    }
    public function setLivro(string $livro){
        $this->livro = $livro;
    }
    public function getMembro(){
        return $this->membro;
    }
    public function setMembro(string $membro){
        $this->membro = $membro;
    }
    public function getBibliotecario(){
        return $this->bibliotecario;
    }
    public function setBibliotecario(string $bibliotecario){
        $this->bibliotecario = $bibliotecario;
    }
    public function getDataEmprestimo(){
        return $this->dataemprestimo;
    }
    public function setDataEmprestimo(string $dataemprestimo){
        $this->dataemprestimo = $dataemprestimo;
    }
    public function getDataDevolucao(){
        return $this->datadevolucao;
    }
    public function setDataDevolucao(string $datadevolucao){
        $this->datadevolucao = $datadevolucao;
    }
}

?>