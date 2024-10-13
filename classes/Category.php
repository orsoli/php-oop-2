<?php
// Imopt file

/**
 * Class Category. 
 * This class specify that every category of product have logo and name
 * @param string $logoUrl Url logo of the category
 * @param string $name Name of the Category
 */
class Category{
    private string $logoUrl;
    private string $name;

    // Construct method
    /**
     * This is constructor for Category
     * This create category with parameters for logo and name
     */
    public function __construct(string $logoUrl, string $name)
    {
        $this->setLogoUrl($logoUrl);
        $this->setName($name);
    }

    // Get the value of logoUrl

    /**
     * Get the value of logoUrl
     * @return string
     */
    public function getLogoUrl(){
        return $this->logoUrl;
    }

    // Set the vale of logoUrls
    
    /**
     * Set the value of logoUrls
     * @param string
     * @return self
     */
    public function setLogoUrl($logoUrl): self
    {
         $this->logoUrl = $logoUrl;
         return $this;
    }
    // Get the value of name

    /**
     * Get the value of name
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    // Set the vale of name
    
    /**
     * Set the value of name
     * @param string
     * @return self
     */
    public function setName($name): self
    {
         $this->name = $name;
         return $this;
    }
}