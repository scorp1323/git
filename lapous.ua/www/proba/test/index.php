<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================
//1262078282 - Таранов Сергей
//899279173 - Оксана Ерастова
//
const TOKEN = '1111577747:AAG0l4447b4uGl51oYZ2v6z-Rq49m1Lf-Zc';
//токен, полученый от BotFather

const BASE_URL = 'https://api.telegram.org/bot' . TOKEN . '/' ;

function sendRequest($method, $params = []) {
  if (!empty($params)) {
    $url = BASE_URL . $method . '?' . http_build_query($params);
  } else {
    $url = BASE_URL . $method;
  }

  return  json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY) ;
}

$updates = sendRequest('getUpdates');


$time = date('d:m:y:  H:i:s');

foreach ($updates['result'] as $update) {
  $chat_id = $update['message']['chat']['id'] ;
  sendRequest('sendMessage', ['chat_id' => $chat_id, 'text' => $time]);
}

// var_dump(sendRequest('sendMessage', ['chat_id' => 1262078282, 'text' => 'Проба Тест' ]));