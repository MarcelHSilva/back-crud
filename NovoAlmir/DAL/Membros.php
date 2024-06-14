<?php

namespace DAL;
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\conexao.php';
include_once 'C:\xampp\htdocs\NovoAlmir\MODEL\Membros.php';
class Membros
{
    public function Select()
    {
        $sql = "Select * from membro";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        $LstMrb = [];

        foreach ($dados as $linha) {
            $mrb = new \MODEL\Membros();
            $mrb->setId($linha['id']);
            $mrb->setNome($linha['nome']);
            $mrb->setTelefone($linha['telefone']);
            $mrb->setDataNascimento($linha['nascimento']);
            $LstMrb[] = $mrb;
        }
        return $LstMrb;    
    }
}

?>

