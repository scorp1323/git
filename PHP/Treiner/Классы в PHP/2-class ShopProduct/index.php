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

class ShopProduct 
{
	// Тело класса
	// Свойства класса
	public $title = "Стандартный товар";
	public $producerMainName = "Фамилия автора";
	public $producerFirstName = "Имя автора";
	public $price = 0;

	// Метод Конструктора класса (вызывается при создании объекта)
	function __construct($title, $firstName, $mainName, $price) {
		$this->title = $title;
		$this->producerMainName = $mainName;
		$this->producerFirstName = $firstName;
		$this->price = $price;
	}



	// Метод класса getProducer
	public function getProducer(){
		return "{$this->producerFirstName} {$this->producerMainName}";
	}
}
// Удобная инициализация объектов, за счет использования конструктора
$product1 = new ShopProduct('Золотые сказки', 'Александр', 'Пушкин', 10.99);
$product2 = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', 5.99);



echo 'Автор: <b>'.$product2->getProducer().'</b>'.'<br>';
echo 'Автор: <b>'.$product1->getProducer().'</b>'.'<br';
echo '<br>';
echo '<br>';



class ShopProductWriter {
	public function write(ShopProduct $shop) {
		$str = "{$shop->title}: <em>{$shop->getProducer()}</em> ({$shop->price})";
		echo $str;
	}
}

$write = new ShopProductWriter();
$write->write($product2);

?>