<?php
//Import Files
require_once __DIR__."/DogProduct.php";

/**
 * Product class. This class specify that every product have an img, title,
 * category, type and price
 * @param string $image Product img 
 * @param string $title Product title 
 * @param Category $image Product category 
 * @param string $type Product tye 
 * @param int|float $price Product price 
 */
class Product {
    protected string $image;
    protected string $title;
    protected Category $category;
    protected string $type;
    protected int|float $price;

// Construct method
/**
 * This is construc for product class.
 * Create a product with parameters for img, title, category,type, price.
 * @param string $image Product img 
 * @param string $title Product title 
 * @param Category $image Product category 
 * @param string $type Product type 
 * @param int|float $price Product price 
 */
public function __construct(string $image,string $title,Category $category,string $type,int|float $price)
{
    $this->image = $image;
    $this->title = $title;
    $this->category = $category;
    $this->type = $type;
    $this->price = $price;
}
}