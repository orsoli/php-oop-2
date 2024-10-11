<?php
// Import files
require_once __DIR__ ."/Product.php";

/**
 * This is the Food class which extends from the Product class.
 * This class specifies that every Food object has the size and material,
 * while other parameters (such as img,title,category,stock,price and description) are flexible.
 */
class Food extends Product{
    public int $size; 
    public string $material;

    /**
     * Constructor for the Food class.
     * Creates a Food object with parameters for img,title,category,stock,price and description.
     *
     * @param string $image Product img 
     * @param string $title Product title 
     * @param Category $image Product category 
     * @param int $stock Product tye 
     * @param int|float $price Product price 
     * @param string $description Product description
     * */
    public function __construct(string $image,string $title,Category $category,int $stock,int|float $price,string $description,int $size, string $material)
    {
        parent::__construct($image, $title, $category, $stock, $price, $description);
        $this->size = $size;
        $this->material = $material;
    }
}