<?php
namespace BLL;
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\Livros.php';

class Livros{
    public function Select(){
        $dalLvr = new \DAL\Livros();
        return $dalLvr->Select();
    }
}

?>