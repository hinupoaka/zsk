<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if(!empty($_POST['name']) && !empty($_POST['geometricFigure'])) {
  switch ($_POST['geometricFigure']) {
    case 'Kwadrat':
      echo "Kwadrat";
      break;

    case 'Prostokąt':
      echo "Prostokąt";
      break;
  }
} else {
  ?>
  <script>
  history.back();
  </script>
  <?php
}
?>
