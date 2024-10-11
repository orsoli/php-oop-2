<?php
//Import Files
require_once __DIR__."/DogProduct.php";
require_once __DIR__."/Toy.php";

/**
 * Product class. This class specify that every product have an img, title,
 * category, stock, description and price
 * @param string $image Product img 
 * @param string $title Product title 
 * @param Category $image Product category 
 * @param int $stock Product tye 
 * @param int|float $price Product price 
 * @param string $description Product description
 */
class Product {
    public string $image;
    public string $title;
    public Category $category;
    public int $stock;
    public int|float $price;
    public string $description;

// Construct method
/**
 * This is construc for product class.
 * Create a product with parameters for img, title, category,stock, price.
 * @param string $image Product img 
 * @param string $title Product title 
 * @param Category $image Product category 
 * @param int $stock Product stock 
 * @param int|float $price Product price 
 * @param string $description Product description
 */
public function __construct(string $image,string $title,Category $category,int $stock,int|float $price, string $description)
{
    $this->image = $image;
    $this->title = $title;
    $this->category = $category;
    $this->stock = $stock;
    $this->price = $price;
    $this->description = $description;
}
}