<?php 
  class AnimalToy extends Product {

   public function __construct($name, $image, $price, $category) {
      $this->name = $name;
      $this->image = $image;
  }
  
}

$dogToy = new AnimalToy ('Kong Classic' , 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
$catToy = new AnimalToy (' Mouse Peluche' , 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');



 $animalsToy = [$dogToy, $catToy];