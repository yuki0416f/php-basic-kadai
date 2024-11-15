<?php
// Foodクラス
class Food {
    public $name;
    public $price;

    // priceプロパティを出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}

// Foodクラスのインスタンスを作成
$food = new Food();
$food->name = "potato";
$food->price = 250;
$food->show_price();

// Animalクラス
class Animal {
    public $name;
    public $height;
    public $weight;

    // heightプロパティを出力するメソッド
    public function show_height() {
        echo $this->height;
    }
}

// Animalクラスのインスタンスを作成
$animal = new Animal();
$animal->name = "dog";
$animal->height = 60;
$animal->weight = 5000;
$animal->show_height();
?>
