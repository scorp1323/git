<?php
//так всегда начинается php код(файл)
//=====================================================

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================

class MyCar {
	public $name;
	public $color;
	public $price;

  public function __construct($name, $color, $price) {
  	$this -> name = $name;
  	$this -> color = $color;
  	$this -> price = $price;
  }

  public function showDetalis() {
  	print " Привет, у меня есть авто для Вас <b>  {$this -> name} </b> - {$this -> color} | {$this -> price} USD <br/>";
  }
}

// создаем первый экземпляр класса
$car1 = new MyCar("BMV", "Black", "4000");

// создаем второй экземпляр класса
$car2 = new MyCar("Volkswagen", "Golf", "1500");

// создаем третий экземпляр класса
$car3 = new MyCar('Opel', 'Cadet', '1500');


// вызываем метод  showDetails() объекта $car1
$car1 -> showDetalis();
//Привет, у меня есть авто для Вас BMV - Black | 4000 USD


// вызываем метод  showDetails() объекта $car2
$car2 -> showDetalis();
//Привет, у меня есть авто для Вас Volkswagen - Golf | 1500 USD

// вызываем метод  showDetails() объекта $car3
$car3 -> showdetalis();
//Привет, у меня есть авто для Вас Opel - Cadet | 1500 USD

?>