<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================

//token_of_BOT
//1111577747:AAG0l4447b4uGl51oYZ2v6z-Rq49m1Lf-Zc

const TOKEN = '1111577747:AAG0l4447b4uGl51oYZ2v6z-Rq49m1Lf-Zc';
//токен, полученый от BotFather

// id чата - 1262078282


//получаем URL, по кот. мы должны постучаться к Апи, содеденяем 'https://api.telegram.org/bot' с нашим токеном + через '/' добавляем метод '/getUpdates'
$api = 'https://api.telegram.org/bot';
$method = 'sendMessage';

$url = $api . TOKEN . '/' . $method;
// echo $url, '<br><br>' ; 



$params = ['chat_id' => 1262078282, 'text' => 'Я бот, но меня послал Сергей!' ];
 $url = $url . '?' . http_build_query($params);
 

$response =  json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY) ;

var_dump($response);



// echo '<pre>';
// print_r($response) ;
// echo '</pre>';