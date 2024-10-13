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
    private string $image;
    private string $title;
    private Category $category;
    private int $stock;
    private int|float $price;
    private string $description;

    // Construct method
    /**
     * This is construc for product class.
     * Create a product with parameters for img, title, category,stock, price.
     * @param string $image Product img 
     * @param string $title Product title 
     * @param Category $category Product category 
     * @param int $stock Product stock 
     * @param int|float $price Product price 
     * @param string $description Product description
     */
    public function __construct(string $image, string $title, Category $category, int $stock, int|float $price, string $description)
    {
        $this->setImage($image);
        $this->setTitle($title);
        $this->setCategory($category);
        $this->setStock($stock);
        $this->setPrice($price);
        $this->setDescription($description);
    }

    // Getter and Setter for $image

    /**
     * Get the value of image
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     * @param string $image
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this; // Allows method chaining
    }

    // Getter and Setter for $title

    /**
     * Get the value of title
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    // Getter and Setter for $category

    /**
     * Get the value of category
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * Set the value of category
     * @param Category $category
     * @return self
     */
    public function setCategory(Category $category): self
    {
        $this->category = $category;
        return $this;
    }

    // Getter and Setter for $stock

    /**
     * Get the value of stock
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     * @param int $stock
     * @return self
     */
    public function setStock(int $stock): self
    {
        $this->stock = $stock;
        return $this;
    }

    // Getter and Setter for $price

    /**
     * Get the value of price
     * @return int|float
     */
    public function getPrice(): int|float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     * @param int|float $price
     * @return self
     */
    public function setPrice(int|float $price): self
    {
        $this->price = $price;
        return $this;
    }

    // Getter and Setter for $description

    /**
     * Get the value of description
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    
}