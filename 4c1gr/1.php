<?php
echo "ZSK<br>";
echo 'ZSK<br>';
$name = "Anna";
$surname = "nowak";
echo 'Imie $name<br>';
echo "Imie $name<br>";


//typy dancyh
// calkowity
$całkowita = 10; //działaja nazyw zmienncyh w polksim języku
echo $całkowita,"<br>";

$bin=0b1011; //binarnie 11
echo $bin,"<br>";

$oct  = 010; // 0 na początku - octanalny - 8
echo $oct,"<br>";

// konkatynacja. -> łączy stringi przed wyświetleniem
// interpolacja , -> wyświetla np. 3 stringi jeden po drugim
echo "text1"."text2","text3<br>";

// zmiennoprzecinkowe
$x=10.5;


// logiczny
$prawda = true; //wyswietla 1
$falsz = false; // nie wyswietla nic

echo"$falsz<br>";
echo"$prawda<br>";


// składnia heredoc

echo <<< ETYKIETA
<hr>
Imię i nazwisko: $name $surname<br>
poznań<br>

ETYKIETA;

$text =  <<< ETYKIETA
<hr>
Imię i nazwisko: $name $surname<br>
poznań<br>

ETYKIETA;

echo $text;

// nowdoc - wszysko traktuje jak stringa

$text =  <<< 'ETYKIETA'
<hr>
Imię i nazwisko: $name $surname<br>
poznań<br>

ETYKIETA;

echo $text;

echo "Imei uzytkownika: $name, nazwa zmiennej imienia \$name"



?>
