<?php
// Import files
require_once __DIR__."/classes/Product.php";

$prod = new DogProduct("http","Bones", "food", 10.5);

var_dump($prod)
?>