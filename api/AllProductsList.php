<?php
// Import files
require_once __DIR__."/../db/db.php";

// Convert to JSON using array_map
$jsonAllProductsList = array_map(function($product) {
    $products = [
        "image" => $product->getImage(), 
        "title" => $product->getTitle(), 
        "category" => [
            "logoUrl" => $product->getCategory()-> getLogoUrl(),
            "name" => $product->getCategory()-> getName(),
        ], 
        "stock" => $product->getStock(), 
        "price" => $product->getPrice(), 
        "description" => $product->getDescription(),   
    ];

    if($product instanceof Food || $product instanceof Toy || $product instanceof Bed) {
        $products["size"] = $product->getSize();
        $products["material"] = $product->getMaterial();
        $products["typeName"] = $product->getTypeName();
    };

    return $products;

},$allProductsList);

// The content being returned is in JSON format.
// For front-end application that expects a JSON response.
header("Content-Type: application/json");

// Convert $allProductsList into a JSON string
echo json_encode($jsonAllProductsList, JSON_PRETTY_PRINT); 