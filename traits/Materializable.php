<?php

trait Materializable{
    private string $size; 
    private string $material;
    private string $typeName;

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
?>