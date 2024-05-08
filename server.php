<?php

// SALVO IN UNA VARIABILE I DATI PRESI DAL FILE dischi.json
$data_string = file_get_contents('dischi.json');

// MODIFICO IL CONTENUTO IN ARRAY ASSOCIATIVI PHP 
$disks = json_decode($data_string,true);

// MODIFICO IL FILE PHP IN UN FILE JSON
header('Content-type: application/json');

// OUTPUT FILE PHP CODIFICATO IN JSON
echo json_encode($disks);

?>