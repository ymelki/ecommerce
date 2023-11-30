<?php
require "Data.php";
$data = new Data();
var_dump($data->getRows("produit"));
var_dump($data->getRows("categorie"));
var_dump($data->getRow("categorie",1));
var_dump($data->getRow("categorie",2));
var_dump($data->getRow("produit",2));



