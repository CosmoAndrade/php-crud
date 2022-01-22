<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar uma pessoa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">

  <h1 class="text-center" >CADASTRAR</h1>
  
    <a href="index.php" class="btn btn-primary">Cancelar cadastro e voltar</a><br>
    <hr>

    <form action="cadastrar.php" method="POST">
      <fieldset>
        <label class="form-label" for="nome">Nome: </label><br>
        <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome"><br>

        <label class="form-label" for="idade">Idade: </label><br>
        <input class="form-control" type="number" id="idade" name="idade" placeholder="Idade"><br>
        <input class="btn btn-success" type="submit" value="Cadastrar pessoa">
      </fieldset>
    </form>

  </div>
</body>
</html>