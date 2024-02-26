<?php 
  class AnimalFood extends Product {

   public function __construct($name, $image, $price) {
      $this->name = $name;
      $this->image = $image;
      $this->price = $price;
      
  }
  


}


   $dogFood = new Animalfood ('Croccantini' , 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',9.99);
   $catFood = new Animalfood (' Cibo in scatola' , 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',9.99);
   $birdFood = new Animalfood ('Semi di girasole' , 'https://shop-cdn-m.mediazs.com/bilder/lillebro/mangime/per/uccelli/selvatici/senza/bucce/3/800/1_icon_topseller_1000x1000_int_19__3.jpg',9.99);
   $fishFood = new Animalfood ('Mangime' , 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',9.99);


   $animalsFood = [$dogFood,$catFood,$birdFood,$fishFood];
?>





