<?php
  $vel = $_POST["velocidade"];

  if ($vel < 60) {
      echo "Velocidade adequada.";
  } elseif ($vel >= 60 && $vel <= 80) {
      echo "Atenção: Velocidade no limite.";
  } else {
      echo "MULTADO: Acima da velocidade permitida!";
  }
?>