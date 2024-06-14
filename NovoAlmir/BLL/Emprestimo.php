<?php
namespace BLL;
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\Emprestimo.php';

class Emprestimo{
    public function Select(){
        $dalEmpt = new \DAL\Emprestimo();
        return $dalEmpt->Select();
    }
}

?>