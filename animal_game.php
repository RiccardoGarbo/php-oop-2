<?php 
  class AnimalToy extends Product {

   public function __construct($name, $image, $price) {
      $this->name = $name;
      $this->image = $image;
      $this->price = $price;
    
  }
  
}

$dogToy = new AnimalToy ('Kong Classic' , 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',9.99);
$catToy = new AnimalToy (' Mouse Peluche' , 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',9.99);
$fishToy = new AnimalToy ('Grotte' , 'https://m.media-amazon.com/images/I/61n6NPiDarL._AC_SL1000_.jpg',9.99);
$birdToy = new AnimalToy (' Scala per uccelli' , 'https://img.kwcdn.com/product/1e78ea1584/3d6ea30c-9365-4c9e-87c7-079d3c9685f3_800x800.jpeg?imageView2/2/w/800/q/70',9.99);



 $animalsToy = [$dogToy, $catToy,$fishToy,$birdToy]; 