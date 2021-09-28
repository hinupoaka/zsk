<?php
echo PHP_VERSION,"<br>";
echo 2**10; //potęgowanie
$x = 1;
$y=1.0;
echo "<br>";
echo $x<=>$y
;
echo "<br>";
echo gettype($x);//zwraca typ dancyh
echo "<br>";
echo gettype($y);//zwraca typ dancyh
//dopisne alalal

// sprawdzamy czy są równe
if ($x==$y) {
  echo "Równe";
  echo "<br>";

}else {
  echo "nie rowne";
  echo "<br>";

}

if ($x===$y) {
  echo "identycznie";
  echo "<br>";

}else {
  echo "nie identyczne";
  echo "<br>";

}

/*
postiinkrementacja x++
preinkrementcja --x
postdekrementacja d--
predekrementacja --d


$x = 10;
$x=$x++;
echo $x; //10
$x=++$x;
echo $x; //11
$y=$x++;
echo $x; //12
echo $y; //11*/



$x = 1;
echo $x;//1
$x=$x++; //ta instukcja nie robi nic z x
echo $x;//1
$x=++$x;
echo $x;//2
$y=++$x;
echo $x;//3
echo $y;//3
$y=$x++; //to zmienia wartość x dlatego że przypisujemy do innej zmiennej
echo $x;//4
echo $y;//3





 ?>
