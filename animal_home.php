<?php 
  class AnimalToy extends Product {

   public function __construct($name, $image, $price) {
      $this->name = $name;
      $this->image = $image;
      $this->price = $price;
    
  }
  
}

$dogHome= new AnimalHome ('Cuccia per cani' , 'https://m.media-amazon.com/images/I/81MBXSwTc-L._AC_SL1500_.jpg',9.99);
$catHome = new AnimalHome ('Albero per gatti' , 'https://m.media-amazon.com/images/I/81Lh4f8LPGL._AC_SL1500_.jpg',9.99);
$birdHome = new AnimalHome ('Voliera' , 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',9.99);
$fishHome = new AnimalHome (' Acquario' , 'https://www.petingros.it/images/casa_del_vetro_1677/28151828_image100x30black1-aperto.jpg',9.99);



 $animalsToy = [$dogHome, $catHome,$birdHome,$fishHome]; 