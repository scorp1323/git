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

//Объявляем класс ShopProduct
class ShopProduct 
{// Тело класса
	// Свойства класса
	private $title;
	private $producerMainName;
	private $producerFirstName;
	protected $price;
	
	// Метод Конструктора класса (вызывается при создании объекта)
	function __construct($title, $firstName, $mainName, $price) {
		$this->title = $title;
		$this->producerMainName = $mainName;
		$this->producerFirstName = $firstName;
		$this->price = $price;
	}
	
	// Методы класса
	public function getPrice () {
		return $this->price;
	}
	
	public function getProducerMainName() {
		return $this->producerMainName;
	}
	
	public function getProducerFirstName() {
		return $this->producerFirstName;
	}
	
	public function setDiscount( $num ) {
		$this->discount=$num;
	}

    public function getDiscount() {
		return $this->discount;
    }

    public function getTitle() {
		return $this->title;
    }
	
	public function getProducer() {
		return "{$this->producerFirstName} {$this->producerMainName}";	
	}	
	
	function getSummaryLine() {
		$base = "{$this->title} ({$this->producerMainName}, {$this->producerFirstName})";
		return $base;
	}
}

// объявляем класс CDProduct дочерний от ShopProduct
class CDProduct extends ShopProduct
{
	private $playLength = 0;
	
	// Конструктор класса CDProduct
	function __construct ($title, $firstName, $mainName, $price, $playLength) {
		// Вызов базового конструктора
		parent::__construct($title, $firstName, $mainName, $price);
		$this->playLength = $playLength;
	}
	
	function getPlayLength() {
		return $this->playLength;
	}
	
	function getSummaryLine() {
		$base = parent::getSummaryLine().": Продолжительность - {$this->playLength}";
		return $base;
	}
}

// объявляем класс BookProduct дочерний от ShopProduct 
class BookProduct extends ShopProduct
{
	private $numPages = 0;
	
	// Конструктор класса BookProduct
	function __construct ($title, $firstName, $mainName, $price, $numPages) {
		// Вызов базового конструктора
		parent::__construct($title, $firstName, $mainName, $price);
		$this->numPages = $numPages;
	}
	
	function getNumberOfPages() {
		return $this->numPages;
	}
	
	function getSummaryLine() {
		$base = parent::getSummaryLine().": {$this->numPages} стр.";
		return $base;
	}
}


// объявляем класс ShopProductWriter
class ShopProductWriter 
{
	private $products = array();
	
	public function addProduct(ShopProduct $shopProduct) {
		$this->products[] = $shopProduct;
	}
	
	public function write() {
		$str = "";
		foreach ($this->products as $product)
		{
			$str .= "{$product->getTitle()}: <b>{$product->getProducer()}</b>; {$product->getPrice()}$<br>";
		}
		echo $str;
	}
}



// Удобная инициализация объектов, за счет использования конструктора
$product1 = new BookProduct('Собачье сердце', 'Михаил', 'Булгаков', 5.99, 380);
$product2 = new CDProduct('Первый снег', 'Группа', 'Моральный кодекс', 2.99, 55.01);

$write = new ShopProductWriter();
$write->addProduct($product1);
$write->addProduct($product2);
$write->write();


# Чтобы обратиться к методу в контексте класса, а не объекта, следует использовать символы "::", а не "->". Поэтому конструкция parent::__construct() означает следующее: "Вызвать метод __construct() родительского класса" 



?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>