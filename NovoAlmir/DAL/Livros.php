<?php

namespace DAL;
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\conexao.php';
include_once 'C:\xampp\htdocs\NovoAlmir\MODEL\Livros.php';
class Livros
{
    public function Select()
    {
        $sql = "Select * from livro";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        $lstLvr = [];

        foreach ($dados as $linha) {
            $lvr = new \MODEL\Livros();
            $lvr->setId($linha['id']);
            $lvr->setTitulo($linha['titulo']);
            $lvr->setAutor($linha['autor']);
            $lvr->setData_Publicacao($linha['data_publicacao']);
            $lvr->setCategoria($linha['categoria']);
            $lvr->setSituacao($linha['situacao']);

            $lstLvr[] = $lvr;
        }
        return $lstLvr;    
    }
}

?>