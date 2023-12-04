<?php


// read all user
require __DIR__.'/../Modele/Data.php';
$db=new Data();
$users=$db->getRows("user");
var_dump($users);

// ramene la vue
include __DIR__.'/../Vue/UserVue.php';
