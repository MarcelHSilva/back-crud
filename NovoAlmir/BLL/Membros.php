<?php
namespace BLL;
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\Membros.php';

class Categoria{
    public function Select(){
        $dalMrb = new \DAL\Membros();
        return $dalMrb->Select();
    }
}

?>