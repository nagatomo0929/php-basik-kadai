<?php
// Foodクラスの定義
class Food {
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        echo "Price of {$this->name}: {$this->price} yen\n";
    }
}

// Animalクラスの定義
class Animal {
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        echo "Height of {$this->name}: {$this->height} cm\n";
    }
}

// Foodクラスのインスタンスを作成
$apple = new Food("Apple", 100);
$orange = new Food("Orange", 150);

// Animalクラスのインスタンスを作成
$dog = new Animal("Dog", 30, 10);
$cat = new Animal("Cat", 25, 5);

// インスタンスを出力
echo "Food Instances:\n";
print_r($apple);
print_r($orange);

echo "\nAnimal Instances:\n";
print_r($dog);
print_r($cat);

// メソッドにアクセスし実行
echo "\nFood Methods:\n";
$apple->show_price();
$orange->show_price();

echo "\nAnimal Methods:\n";
$dog->show_height();
$cat->show_height();
?>
