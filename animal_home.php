<?php 
  class AnimalToy extends Product {

   public function __construct($name, $image, $price, $category) {
      $this->name = $name;
      $this->image = $image;
  }
  
}

$dogHome= new AnimalHome ('Cuccia per cani' , 'https://m.media-amazon.com/images/I/81MBXSwTc-L._AC_SL1500_.jpg');
$catHome = new AnimalHome ('Albero per gatti' , 'https://m.media-amazon.com/images/I/81Lh4f8LPGL._AC_SL1500_.jpg');
$birdHome = new AnimalHome ('Voliera' , 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
$fishHome = new AnimalHome (' Acquario' , 'https://www.petingros.it/images/casa_del_vetro_1677/28151828_image100x30black1-aperto.jpg');



 $animalsToy = [$dogHome, $catHome,$birdHome,$fishHome];