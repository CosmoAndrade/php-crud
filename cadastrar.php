<?php
  include "conexao.php";
  $conexao->query("INSERT INTO pessoa (nome, idade) VALUES ('$_POST[nome]', $_POST[idade])");
  header("location: index.php");
?>