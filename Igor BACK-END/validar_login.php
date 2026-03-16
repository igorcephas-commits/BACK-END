<?php
  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  if ($usuario == "admin" && $senha == "1234") {
      echo "Acesso concedido!";
  } else {
      echo "Acesso negado.";
  }
?>