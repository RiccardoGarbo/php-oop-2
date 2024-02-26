<?php 

 class Product {
   public $name;
   public $image;
   public $price;
   

   public function __construct($name, $image, $price) {
       $this->name = $name;
       $this->image = $image;
       $this->price = $price;
       
   }
}

?>





