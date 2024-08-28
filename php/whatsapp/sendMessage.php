<?php
function sendTextMessage($phone, $text)
{
    $typing = rand(10, 20);
    $url = 'https://gate.whapi.cloud/messages/text';
    $data = [
        'typing_time' => $typing,
        'to' => $phone,
        'body' => $text
    ];

    // Инициализация cURL
    $ch = curl_init($url);

    // Настройка параметров cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'Authorization: Bearer XYxkgR1VzghhH3f0Ra0HeJg2wKWE9v0h',
        'Content-Type: application/json'
    ]);

    // Выполнение запроса и получение ответа
    $response = curl_exec($ch);

    // Проверка на ошибки
    if ($response === false) {
        echo 'Error: ' . curl_error($ch);
    } else {
        header('Location: ../../business/employes.php');
    }

    // Закрытие cURL
    curl_close($ch);

}
//sendTextMessage('77774191516', 'Калай е');