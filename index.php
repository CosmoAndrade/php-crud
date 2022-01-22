<?php

require './conexao.php';

$consulta = $conexao->query("SELECT * FROM pessoa");  //Exibir dados

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Crud</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center mt-3">Crud</h1>
        <a href="formCadastrar.php" class="btn btn-primary" >Cadastrar uma nova pessoa</a><br>
  <table class="table">
    <tr>
      <th>Nome</th>
      <th>Idade</th>
      <th >Ações</th>
    </tr>

    <?php while($linha = $consulta->fetch()): ?>
      <tr>
        <td><?php echo $linha['nome'] ?></td>
        <td><?php echo $linha['idade'] ?></td>
        <td id="alterar"><?php echo "<a class='bi bi-pencil-fill' href='formAlterar.php?codigo=$linha[codigo]&nome=$linha[nome]&idade=$linha[idade]'></a>" ?> </td>
        <td id="excluir"><?php echo "<a class='bi bi-trash' href='formExcluir.php?codigo=$linha[codigo]&nome=$linha[nome]&idade=$linha[idade]'></a>" ?> </td>
      </tr>
    <?php endwhile ?>
  </table>



    </div> <!-- FIm container -->







</body>

</html>