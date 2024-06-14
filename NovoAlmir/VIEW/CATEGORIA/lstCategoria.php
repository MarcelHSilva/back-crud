<?php
include_once 'C:\xampp\htdocs\NovoAlmir\BLL\Categoria.php';
use BLL\Categoria;
$bllCtgr = new \BLL\Categoria();
$lstCtgr = $bllCtgr->Select();
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
    <title> Categorias usando DAL/MODEL</title>
</head>

<body>
    <h1>Categorias</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>DESCRIÇÃO</th>
        </tr>
        <?php foreach ($lstCtgr as $ctgr) { ?>
            <tr>
                <td><?php echo $ctgr->getId(); ?></td>
                <td><?php echo $ctgr->getDescricao(); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>