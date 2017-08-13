<?php
class Car 
{
    private $type;
    private $colour;
    private $price;
    
    public function __construct($type, $colour, $price) 
    {
        $this->type = $type;
        $this->colour = $colour;
        $this->price = $price;
    }
    public function getPromo() {
        if ($this->price > 1000000) {
            return 'Перекрасим в любой цвет за наш счет';
        }
    }
}
class Television
{
    private $size;
    private $price;
    
    public function __construct($size, $price) 
    {
        $this->size = $size;
        $this->price = $price;
    }
    
    public function getDiscount()
    {
        if ($this->price > 10000) {
            return 5;
        }
    }
}
class Pen
{
    private $colour;
    private $price;
    
    public function __construct($colour, $price) 
    {
        $this->colour = $colour;
        $this->price = $price;
    }
    public function getPromo() {
        if ($this->colour === 'blue')
        {
            return 'Вторая ручка в подарок';
        }
    }
}
class Duck
{
    private $sex;
    private $weight;
    
    public function __construct($sex, $weight) 
    {
        $this->sex = $sex;
        $this->weight = $weight;
    }
    public function getName() 
    {
        return 'Donald';
    }
}
class Item
{
    private $price;
    private $size;
    private $weight;
    
    public function __construct($price, $size, $weight) 
    {
        $this->price = $price;
        $this->size = $size;
        $this->weight = $weight;
    }

    public function getDeliveryPrice()
    {
        return $this->weight * 2;
    }
}

$car = new Car('jeep', 'white', 1000000);
$anotherCar = new Car('jeep', 'black', 3000000);
echo ($anotherCar->getPromo()) . PHP_EOL;

$tv = new Television(30, 20000);
$anotherTv = new Television(40, 40000);
echo $anotherTv->getDiscount() . PHP_EOL;

$pen = new Pen('blue', 1000);
$anotherPen = new Pen('red', 1000);
echo $pen->getPromo() . PHP_EOL;

$duck = new Duck('male', 5);
$anotherDuck = new Duck('female', 4);
echo $duck->getName() . PHP_EOL;

$item = new Item(200, 2, 10);
$anotherItem = new Item(100, 1, 5);
echo $item->getDeliveryPrice() . PHP_EOL;