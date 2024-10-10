<?php
// Import files
require_once __DIR__."/db/db.php";

// Header read in application JSON
header("Content-Type: application/json");
// Convert array in JSON format from PHP
echo json_encode($productsList, JSON_PRETTY_PRINT);