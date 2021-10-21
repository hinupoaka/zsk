<?php
  echo "dzień-miesiąc-rok: ".date('d-m-Y').'<br>';
  echo date('d-m-y').'<br>';
  echo date('d-M-Y').'<br>';
  echo date('d-F-Y').'<br>';

  setlocale(LC_ALL, 'polish');
  echo strftime('%d %B %Y').'<br>';

  echo date('G:i:s').'<br>';
  echo date('G:i:sa').'<br>';
  echo date('H:i:s').'<br>';

 ?>

 <script>
    setTimeout(function() {
      window.location.reload();
    },1000);
 </script>

<?php
  $data = getdate();
  echo "<pre>";
    print_r($data);
  echo "</pre>";
  echo $data['wday'];
  echo $data['yday'];

  echo date('L').'<br>';

  $today=mktime(0, 0, 0, date('m'), date('d'), date('Y')-1);
  echo $today.'<br>';

  $year=$today/(60*60*24*365);
  echo (int)$year.'<br>'
 ?>
