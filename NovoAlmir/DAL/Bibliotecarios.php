<?php

namespace DAL;
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\conexao.php';
include_once 'C:\xampp\htdocs\NovoAlmir\MODEL\Bibliotecarios.php';
class Bibliotecarios
{
    public function Select()
    {
        $sql = "Select * from bibliotecario";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        $lstBbt = [];

        foreach ($dados as $linha) {
            $bbt = new \MODEL\Bibliotecarios();
            $bbt->setId($linha['id']);
            $bbt->setNome($linha['nome']);
            $bbt->setTelefone($linha['telefone']);
            $lstBbt[] = $bbt;
        }
        return $lstBbt;    
    }
}

?>

