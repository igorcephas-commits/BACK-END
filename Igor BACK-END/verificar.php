<?php

  $idade = $_POST["idade"];

  if ($idade >= 18) {
      echo "Olá, você tem ", $idade, " anos. Portanto, você é maior de idade.";
  } else {
      echo "Olá, você tem ", $idade, " anos. Portanto, você é menor de idade.";
  }

?>