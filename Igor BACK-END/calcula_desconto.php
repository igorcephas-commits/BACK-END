<?php
  $valor = $_POST["valor"];

  if ($valor > 100) {
      $desconto = $valor * 0.10;
      $valor_final = $valor - $desconto;
      echo "Desconto de 10% aplicado!<br>";
  } else {
      $valor_final = $valor;
      echo "Sem desconto aplicado.<br>";
  }

  echo "Valor final a pagar: R$ ", number_format($valor_final, 2, ',', '.');
?>