<?php

namespace DAL;

include_once 'C:\xampp\htdocs\NovoAlmir\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\NovoAlmir\MODEL\Categoria.php';
class Categoria
{

    public function Select()
    {
        $sql = "Select * from categoria";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        $lstCtgr = [];

        foreach ($dados as $linha) {
            $ctgr = new \MODEL\Categoria();
            $ctgr->setId($linha['id']);
            $ctgr->setDescricao($linha['descricao']);
            $lstCtgr[] = $ctgr;
        }
        return $lstCtgr;
    }
}
?>
