<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar uma pessoa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="index.php">Cancelar cadastro e voltar</a><br>
  <form action="cadastrar.php" method="POST">
    <fieldset>
      <label for="nome">Nome: </label><br>
      <input type="text" id="nome" name="nome" placeholder="Nome"><br>
      <label for="idade">Idade: </label><br>
      <input type="number" id="idade" name="idade" placeholder="Idade"><br>
      <input class="botaoSubmit" type="submit" value="Cadastrar pessoa">
    </fieldset>
  </form>
</body>
</html>