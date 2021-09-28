<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>początek pliku</h3>
    <?php
      include './3.1.php'; //przy zlej nazwie tylko
      require './3.1.php';
      include_once//nie wczytuje kilkuktornie 
      require_once//nie wczytuje kilkuktornie 

     ?>
    <h3>koniec pliku</h3>
  </body>
</html>
