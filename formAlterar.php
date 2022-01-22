<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Alterar uma pessoa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
      <h1 class="text-center mt-3">ALTERAR</h1>
    <a href="index.php" class="btn btn-primary" >Cancelar alteração e voltar</a><br>
    <hr>
    <form action="alterar.php" method="POST">
      <fieldset>
        <input class="form-control" type="hidden" name="codigo" value="<?php echo $_GET['codigo'] ?>">
        <label class="form-label" for="nome">Nome: </label><br>
        <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" value="<?php echo "$_GET[nome]" ?>"><br>
        <label class="form-label" for="idade">Idade: </label><br>
        <input class="form-control" type="number" id="idade" name="idade" placeholder="Idade" value="<?php echo "$_GET[idade]" ?>"><br>
        <input class="btn btn-success" type="submit" value="Alterar pessoa">
      </fieldset>
    </form>
  </div>
</body>
</html>