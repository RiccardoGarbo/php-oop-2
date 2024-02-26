<?php 

class Category {
    public $categoryName;
    public $categoryIcon;

    public function __constuct($categoryName , $categoryIcon)

    $this->categoryName =  $categoryName;
    $this->categoryIcon = $categoryIcon;


}

$categoryDog = new Category ( 'Dog' , '<i class="fa-solid fa-dog"></i>' )
$categoryCat = new Category ( 'Cat' , '<i class="fa-solid fa-cat"></i>' )
$categoryBird = new Category ( 'Bird' , '<i class="fa-solid fa-dove"></i>' )
$categoryFish = new Category ( 'Fish' , '<i class="fa-solid fa-fish"></i>' )


