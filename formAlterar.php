<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Alterar uma pessoa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="index.php">Cancelar alteração e voltar</a><br>
  <form action="alterar.php" method="POST">
    <fieldset>
      <input type="hidden" name="codigo" value="<?php echo $_GET['codigo'] ?>">
      <label for="nome">Nome: </label><br>
      <input type="text" id="nome" name="nome" placeholder="Nome" value="<?php echo "$_GET[nome]" ?>"><br>
      <label for="idade">Idade: </label><br>
      <input type="number" id="idade" name="idade" placeholder="Idade" value="<?php echo "$_GET[idade]" ?>"><br>
      <input class="botaoSubmit" type="submit" value="Alterar pessoa">
    </fieldset>
  </form>
</body>
</html>