<?php

require './conexao.php';


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <title>DELETE</title>
</head>
<body>
    
    <div class="container">

    <h1 class="text-center">DELETE</h1>

    <a href="index.php" class="btn btn-primary"> Cancelar exclusão e voltar!</a>
    <hr>

  <p>Realmente deseja exluir <strong><?php echo $_GET['nome'] ?></strong> com <?php echo $_GET['idade'] ?> anos de idade?</p><br>
  <form action="excluir.php" method="POST">
    <input type="hidden" name="codigo" value="<?php echo $_GET['codigo'] ?>">
    <input class="btn btn-danger" type="submit" value="Sim, excluir">
  </form>

    </div>


</body>
</html>