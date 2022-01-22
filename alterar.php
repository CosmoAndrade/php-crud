<?php
  include "conexao.php";
  $conexao->query("UPDATE pessoa SET nome='$_POST[nome]', idade=$_POST[idade] WHERE codigo=$_POST[codigo]");
  header("location: index.php");
?>