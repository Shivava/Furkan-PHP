<?php

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

echo "opdracht1", PHP_EOL;
var_dump($klas);

echo "opdracht2", PHP_EOL;

for ($i=0; $i <count($klas) ; $i++) {
  echo $klas[$i], PHP_EOL;
}

echo "opdracht3", PHP_EOL;
foreach ($klas as $key => $value) {
  echo $klas[$key], PHP_EOL;
  }

echo "Combinatie opdracht", PHP_EOL;

$bucket_list = [];

$hoeveelheid_activiteiten = readline("Hoeveel items wil je toevoegen aan je bucket list? ");

for ($i=0; $i<$hoeveelheid_activiteiten; $i++) {
    $activiteit = readline("welke activiteiten wil je toevoegen? ");
    array_push($bucket_list, $activiteit);
}

var_dump($bucket_list);

for ($i=0; $i <count($bucket_list) ; $i++) {
  echo $bucket_list [$i], PHP_EOL;
}

?>
