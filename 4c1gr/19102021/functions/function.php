<?php

function show() {
  echo "test";
}

function showName($name) {
  return $name;
}

// Zdefiniuj funkcję o nazwie stringValidate, która wykona następujące działąnia:
// 1) Usunie białę znaki
// 2) Zamieni pierwszą literę na dużą
// 3) Od drugiej litery małe znaki
// 4) Drugi parametr będzie określał długość stringa

function stringValidate($name, $lenght) {
  return substr(ucfirst(strtolower(trim($name), 0, $lenght)));
}
 ?>
