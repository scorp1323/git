<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================
//1262078282 - Таранов Сергей
//899279173 - Оксана Ерастова



const TOKEN = '1111577747:AAG0l4447b4uGl51oYZ2v6z-Rq49m1Lf-Zc';
//токен, полученый от BotFather

$method = 'setWebhook';


$url = 'https://api.telegram.org/bot' . TOKEN . '/' . $method;

$options = ['url' => 'https://www.lapous.com.ua/proba/webhook/'];

$response = file_get_contents($url . '?' . http_build_query($options));

var_dump($response);
