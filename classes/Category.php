<?php
// Imopt file

/**
 * Class Category. 
 * This class specify that every category of product have logo and name
 * @param string $logoUrl Url logo of the category
 * @param string $name Name of the Category
 */
class Category{
    public string $logoUrl;
    public string $name;

    // Construct method
    /**
     * This is constructor for Category
     * This create category with parameters for logo and name
     */
    public function __construct(string $logoUrl, string $name)
    {
        $this->logoUrl = $logoUrl;
        $this->name = $name;
    }

    // Get functions
    public function getLogo(){
        return $this->logoUrl;
    }
    public function getName(){
        return $this->name;
    }
}