<?php
// Step2. クラスを作成する

class Food {
  private $name;
  private $price;

  // コンストラクタ
  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  // priceプロパティを出力するメソッド
  public function show_price() {
    echo $this->price . "<br>";
  }
}

class Animal {
  private $name;
  private $height;
  private $weight;

  // コンストラクタ
  public function __construct($name, $height, $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  // heightプロパティを出力するメソッド
  public function show_height() {
    echo $this->height . "<br>";
  }
}

// Step3. インスタンス作成と出力
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

print_r($food);
echo "<br>";
print_r($animal);
echo "<br>";

// Step4. メソッド実行
$food->show_price();
$animal->show_height();
?>
