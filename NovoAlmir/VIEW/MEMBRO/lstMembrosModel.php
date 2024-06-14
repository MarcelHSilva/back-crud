<?php


include_once 'C:\xampp\htdocs\NovoAlmir\DAL\conexao.php';
include_once 'C:\xampp\htdocs\NovoAlmir\MODEL\Membros.php';
$sql = "Select * from membro";
$con = \DAL\Conexao::conectar();
$dados = $con->query($sql);

$lstMrb = [];

foreach($dados as $linha){
    $mrb = new \MODEL\Membros();
    $mrb->setId($linha['id']);
    $mrb->setNome($linha['nome']);
    $mrb->setTelefone($linha['telefone']);
    $mrb->setDataNascimento($linha['nascimento']);

    $lstMrb[] = $mrb;
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
    <title> Membros usando Model</title>
</head>
<body>
    <h1>Membros</h1>
    <table class="striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
        </tr>
        <?php foreach($lstMrb as $mrb){?>
        <tr>
            <td><?php echo $mrb->getId();?></td>
            <td><?php echo $mrb->getNome();?></td>
            <td><?php echo $mrb->getTelefone();?></td>
            <td><?php echo $mrb->getDataNascimento();?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>