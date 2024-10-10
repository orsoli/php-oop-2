<?php 
// Import files
require_once __DIR__."/Product.php";
require_once __DIR__."/Category.php";


/**
 * This is the DgProduct class which extends from the Product class.
 * This class specifies that every Dog Product object has the category "Dog" and logo "dogLogo",
 * while other parameters (such as img,title,type,price) are flexible.
 */
class DogProduct extends Product{
    // Construct method
    /**
     * Constructor for the DogProduct class.
     * Creates a DogProduct object with parameters for img,title, type and price.
     *
     * @param string $image The image of the product.
     * @param string $title The title of the product.
     * @param string $type The type of the product.
     * @param int|float $price The price of the product.
     * */
    public function __construct(string $image, string $title, string $type, int|float $price)
    {
        // Call instructor of Product class with category "Dog" and logo "http"
        parent::__construct($image,$title,new Category("dog-logo.avif","Dog"),$type,$price);
    }
}

?>