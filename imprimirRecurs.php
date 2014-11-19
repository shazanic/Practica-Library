<?php
include_once ("recurs.php");
include_once ("books.php");
include_once ("videos.php");

$recurs= new recurs("l", "Proba de titol", "Prova d'autor", "DataPublicacio", false);
print ($recurs->imprimirRecurs());

$book= new book ("l","Proba de titol", "Prova d'autor", "DataPublicacio", true, 800, 8423968529);
print ($book->imprimirRecurs());

$videos= new videos ("v","Proba de titol", "Prova d'autor", "DataPublicacio", false,"VHS");
print ($videos->imprimirRecurs());
?>

