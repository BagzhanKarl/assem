<?php

$userId = '77774191516';
$url = 'https://gate.whapi.cloud/users/login/' . $userId;

// Инициализация cURL
$ch = curl_init($url);

// Настройка параметров cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json',
    'Authorization: Bearer XYxkgR1VzghhH3f0Ra0HeJg2wKWE9v0h',
]);

// Выполнение запроса и получение ответа
$response = curl_exec($ch);

// Проверка на ошибки
if ($response === false) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo $response;
}

// Закрытие cURL
curl_close($ch);
