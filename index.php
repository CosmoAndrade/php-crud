<?php

$conexao = new PDO('mysql:host=localhost;dbname=projeto', 'root' , '');

$consulta = $conexao->query("SELECT * FROM pessoa");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <title>Crud</title>
</head>
<body>

    <div class="container">
        <h1 class="text-center mt-3">Crud</h1>

        <table class="table ">
            <thead>
                <tr>
                    <th >Nome:</th>
                    <th >Idade: </th>
                </tr>

            </thead>

            <tbody>

              <?php  while( $linha = $consulta->fetch()): ?>
                
                <tr>
                    <td>
                        <?php echo $linha['nome']  ?>
                    </td>
                    <td>
                        <?php echo $linha['idade'] ?>
                    </td>
                </tr>

              <?php endwhile  ?>  

            </tbody>
        </table>



    </div>
    
   




</body>
</html>