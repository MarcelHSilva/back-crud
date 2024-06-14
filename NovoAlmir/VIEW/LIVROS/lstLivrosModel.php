<?php


include_once 'C:\xampp\htdocs\NovoAlmir\DAL\conexao.php';
include_once 'C:\xampp\htdocs\NovoAlmir\MODEL\Livros.php';
$sql = "Select * from livro";
$con = \DAL\Conexao::conectar();
$dados = $con->query($sql);

$lstLvr = [];

foreach($dados as $linha){
    $lvr = new \MODEL\Livros();
    $lvr->setId($linha['id']);
    $lvr->setTitulo($linha['titulo']);
    $lvr->setAutor($linha['autor']);
    $lvr->setData_Publicacao($linha['data_publicacao']);
    $lvr->setCategoria($linha['categoria']);
    $lvr->setSituacao($linha['situacao']);
    $lstLvr[] = $lvr;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title> Livros usando Model</title>
</head>
<body>
    <h1>Livros</h1>
    <table class="striped">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Data da Publicação</th>
            <th>Categoria</th>
            <th>Situação</th>
        </tr>
        <?php foreach($lstLvr as $lvr){?>
        <tr>
            <td><?php echo $lvr->getId();?></td>
            <td><?php echo $lvr->getTitulo();?></td>
            <td><?php echo $lvr->getAutor();?></td>
            <td><?php echo $lvr->getData_Publicacao();?></td>
            <td><?php echo $lvr->getCategoria();?></td>
            <td><?php echo $lvr->getSituacao();?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>