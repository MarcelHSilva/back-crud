<?php

namespace DAL;
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\conexao.php';
include_once 'C:\xampp\htdocs\NovoAlmir\MODEL\Emprestimo.php';
class Emprestimo
{
    public function Select()
    {
        $sql = "Select * from emprestimo";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        $LstEmpt = [];

        foreach ($dados as $linha) {
            $empt = new \MODEL\Emprestimo();
            $empt->setId($linha['id']);
            $empt->setLivro($linha['livro']);
            $empt->setMembro($linha['membro']);
            $empt->setBibliotecario($linha['bibliotecario']);
            $empt->setDataEmprestimo($linha['data_emprestimo']);
            $empt->setDataDevolucao($linha['data_devolucao']);
            $LstEmpt[] = $empt;
        }
        return $LstEmpt;    
    }
}

?>

