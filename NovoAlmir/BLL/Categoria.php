<?php
namespace BLL;
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\Categoria.php';

class Categoria{
    public function Select(){
        $dalCtgr = new \DAL\Categoria();
        return $dalCtgr->Select();
    }
}

?>