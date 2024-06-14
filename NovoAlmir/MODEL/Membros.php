<?php
namespace MODEL;
class Membros{
    private ?int $id;
    private ?string $nome;
    private string $telefone;
    private ?string $nascimento;

    public function __construct(){}

    public function getID(){
       return $this->id;
    }
    public function setID(int $id){
         $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone(string $telefone){
        $this->telefone = $telefone;
    }
    public function getDataNascimento(){
        return $this->nascimento;
    }
    public function setDataNascimento(string $nascimento){
        $this->nascimento = $nascimento;
    }
}

?>