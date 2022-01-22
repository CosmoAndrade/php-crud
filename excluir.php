<?php
  include "conexao.php";
  $conexao->query("DELETE FROM pessoa WHERE codigo=$_POST[codigo]");
  header("location: index.php");
?>