<?php
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\Livros.php';
$dalLvr = new DAL\Livros();
$lstLvr = $dalLvr->Select(); 
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
    <table class="highlight">
        <tr>
        <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Data da Publicação</th>
            <th>Categoria</th>
            <th>Situação</th>
        </tr>
        <?php foreach ($lstLvr as $lvr) { ?>
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