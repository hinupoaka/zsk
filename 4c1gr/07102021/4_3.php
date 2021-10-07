<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
    <?php
    if (isset($_GET['was_here'])) {
      echo "Witaj ponownie na stronie";
    }
    if (!isset($_POST['person']) && !isset($_POST['buttonAvg'])) {
      echo <<< FORMCOUNTPERSON
      <h3>Ile osób w rodzinie</h3>
      <form method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
        <input type="submit" value="Zatwierdź">
      </form>
FORMCOUNTPERSON;
    }
    ?>
    <?php
      if (!empty($_POST['person'])) {
        echo "<h3>Ile osób w rodzinie: $_POST[person] </h3>";
        echo '<form method="post">';
        $count = $_POST['person'];
        for ($i = 1; $i <= $count; $i++) {
          echo '<input type="number" name="person'.$i.'" placeholder="Podaj wiek osoby nr '.$i.'"><br><br>';
        }
        echo '<input type="submit" name="buttonAvg" value="Zatwierdź"></form>';
      }
      if (isset($_POST['buttonAvg'])) {
        $avg = 0;
        $count = 0;
        foreach ($_POST as $key => $value) {
          if ($key != 'buttonAvg') {
              $avg+=$value;
              $count++;
          }
        }
        echo "Średni wiek: ".number_format($avg/$count, 2)."<br>";
        echo '<a href="./4_3.php?was_here=true">Strona główna</a>';
      }
    ?>
  </body>
</html>
