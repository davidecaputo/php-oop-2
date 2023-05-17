<?php
class Product {
    public $title, $image, $category, $price;

    public function __construct($title, $image, $category, $price){
        $this->title = $title;
        $this->image = $image;
        $this->category = $category;
        $this->price = $price;
    }
}

class Food extends Product {
    public $name, $weight;

    public function __construct($name, $weight){
        $this->name = $name;
        $this->weight = $weight;
    }
}