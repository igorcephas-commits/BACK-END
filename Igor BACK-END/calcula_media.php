<?php

  $n1 = $_POST["nota1"];
  $n2 = $_POST["nota2"];
  $n3 = $_POST["nota3"];

  $media = ($n1 + $n2 + $n3) / 3;

  echo "A média final é: ", number_format($media, 1), "<br>";

  if ($media >= 7) {
      echo "Status: Aprovado!";
  } elseif ($media >= 5 && $media < 7) {
      echo "Status: Recuperação.";
  } else {
      echo "Status: Reprovado.";
  }

?>