<?php
//Import Files

/**
 * Product class. This class specify that every product have an img, title,
 * category and price
 * @param string $image Product img 
 * @param string $title Product title 
 * @param Category $image Product category 
 * @param string $price Product price 
 */
class Product {
    protected string $image;
    protected string $title;
    protected Category $category;
    protected string $price;

// Construct method
/**
 * This is construc for product class.
 * Create a product with parameters for img, title, category, price.
 * @param string $image Product img 
 * @param string $title Product title 
 * @param Category $image Product category 
 * @param string $price Product price 
 */
public function __construct(string $image,string $title,Category $category,string $price)
{
    $this->image = $image;
    $this->title = $title;
    $this->category = $category;
    $this->price = $price;
}
}