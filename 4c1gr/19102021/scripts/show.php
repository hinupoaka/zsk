<?php
  require_once("../functions/function.php");
  show();

  if(!empty($_POST['name'])) {
    echo "<hr>Imię: ".showName($_POST['name']);
  }
 ?>
