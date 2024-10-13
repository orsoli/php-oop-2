<?php
// Import files
require_once __DIR__ ."/Product.php";

/**
 * This is the Food class which extends from the Product class.
 * This class specifies that every Food object has the size and material,
 * while other parameters (such as img,title,category,stock,price and description) are flexible.
 */
class Food extends Product{
    private string $size; 
    private string $material;
    private string $typeName;

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
    public function __construct(string $image, string $title, Category $category, int $stock, int|float $price, string $description, string $size, string $material, string $typeName)
    {
        parent::__construct($image, $title, $category, $stock, $price, $description);
        $this->setSize($size);
        $this->setMaterial($material);
        $this->setTypeName($typeName);
    }

    // Get the value of size

    /**
     * Get the value of size
     * @return string
     */
    public function getSize(){
        return $this->size;
    }
    // Set the vale of size
    
    /**
     * Set the value of size
     * @param string
     * @return self
     */
    public function setSize($size): self
    {
         $this->size = $size;
         return $this;
    }
    // Get the value of size

    /**
     * Get the value of material
     * @return string
     */
    public function getMaterial(){
        return $this->material;
    }

    // Set the vale of material
    
    /**
     * Set the value of material
     * @param string
     * @return self
     */
    public function setMaterial($material): self
    {
         $this->material = $material;
         return $this;
    }

    // Get the value of typeName

    /**
     * Get the value of typeName
     * @return string
     */
    public function getTypeName(){
        return $this->typeName;
    }

    // Set the vale of typeName 

    /**
     * Set the value of typeName
     * @param string
     * @return self
     */
    public function setTypeName($typeName): self
    {
         $this->typeName = $typeName;
         return $this;
    }
}