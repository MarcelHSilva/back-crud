<?php
include_once 'C:\xampp\htdocs\NovoAlmir\DAL\Emprestimo.php';
$dalEmpt = new DAL\Emprestimo();
$lstEmpt = $dalEmpt->Select(); 
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
    <title> Emprestimo usando Model</title>
</head>

<body>
    <h1>Emprestimo</h1>
    <table class="highlight">
        <tr>
        <th>ID</th>
            <th>Nome do Livro</th>
            <th>Membro</th>
            <th>Bibliotecário</th>
            <th>Data do Empréstimo</th>
            <th>Data da Devolução</th>
        </tr>
        <?php foreach ($lstEmpt as $empt) { ?>
            <tr>
            <td><?php echo $empt->getId();?></td>
            <td><?php echo $empt->getLivro();?></td>
            <td><?php echo $empt->getMembro();?></td>
            <td><?php echo $empt->getBibliotecario();?></td>
            <td><?php echo $empt->getDataEmprestimo();?></td>
            <td><?php echo $empt->getDataDevolucao();?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>