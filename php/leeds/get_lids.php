<?php
require '../db.php';

$company = $_GET['company'];
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$perPage = 10;
$offset = ($page - 1) * $perPage;

// Запрос общего количества записей
$totalRecords = R::count('lead', 'company = ?', [$company]);

// Запрос данных с учетом пагинации
$beans = R::findAll('lead', 'company = ? LIMIT ? OFFSET ?', [$company, $perPage, $offset]);

// Преобразование данных в формат JSON
$leadData = [];
foreach ($beans as $bean) {
    $leadData[] = [
        'Имя' => $bean->name,
        'Фамилия' => $bean->surname,
        'Номер телефона' => $bean->phone,
        'Источник' => $bean->source,
        'Дата заявки' => $bean->created_at,
        'Статус' => $bean->status,
    ];
}

// Отправка данных в формате JSON
header('Content-Type: application/json');
echo json_encode([
    'data' => $leadData,
    'totalRecords' => $totalRecords
]);
