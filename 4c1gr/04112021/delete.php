<?php
  if(!empty($_GET['id'])) {
    require_once './connect.php';
    $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[id]";
    $connect->query($sql);
    if($connect->affected_rows) {
      header("location: 2_bazy_tabela.php?error=0&info=Usunięto rekord o id=$id");
    } else {
      header('location: 2_bazy_tabela.php?error=0&info=Nie usunięto rekordu!');
    }
  } else {
    header('location: 2_bazy_tabela.php');
  }
 ?>
