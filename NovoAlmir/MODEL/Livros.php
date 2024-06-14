<?php
namespace MODEL;
class Livros{
    private ?int $id;
    private ?string $titulo;
    private string $autor;
    private string $data_publicacao;
    private string $categoria;
    private string $situacao;

    public function __construct(){}

    public function getID(){
       return $this->id;
    }
    public function setID(int $id){
         $this->id = $id;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo(string $titulo){
        $this->titulo = $titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor(string $autor){
        $this->autor = $autor;
    }
    public function getData_Publicacao(){
        return $this->data_publicacao;
    }
    public function setData_Publicacao(string $data_publicacao){
        $this->data_publicacao = $data_publicacao;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria(string $categoria){
        $this->categoria = $categoria;
    }
    public function getSituacao(){
        return $this->situacao;
    }
    public function setSituacao(string $situacao){
        $this->situacao = $situacao;
    }
}

?>