<?php 
// Import files
require_once __DIR__."/Product.php";
require_once __DIR__."/Category.php";


/**
 * This is the CatProduct class which extends from the Product class.
 * This class specifies that every CatProduct object has the category "Cat" and logo "CatLogo",
 * while other parameters (such as img,title,type,price) are flexible.
 */
class CatProduct extends Product{
    // Construct method
    /**
     * Constructor for the CatProduct class.
     * Creates a CatProduct object with parameters for img,title, type and price.
     *
     * @param string $image The image of the product.
     * @param string $title The title of the product.
     * @param string $type The type of the product.
     * @param int|float $price The price of the product.
     * */
    public function __construct(string $image, string $title, string $type, int|float $price)
    {
        // Call instructor of Product class with category "Cat" and logo "http"
        parent::__construct($image,$title,new Category("http","Cat"),$type,$price);
    }
}

?>