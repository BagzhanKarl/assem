<?php
require "../db.php";

// Функции для генерации случайных данных
function generateRandomName() {
    $firstNames = ['Айжан', 'Арман', 'Диана', 'Бекжан', 'Алина', 'Данияр', 'Аружан', 'Нуржан', 'Гульнар', 'Мейрам'];
    return $firstNames[array_rand($firstNames)];
}

function generateRandomSurname() {
    $lastNames = ['Сапарова', 'Жумагалиев', 'Кусаинов', 'Сейдахметова', 'Ахметов', 'Нурланова', 'Жаксылык', 'Есенгалиев', 'Калдыбаев', 'Тулегенов'];
    return $lastNames[array_rand($lastNames)];
}

function generateRandomPhone() {
    $prefixes = ['7701', '7702', '7705', '7707', '7778'];
    return $prefixes[array_rand($prefixes)] . rand(1000000, 9999999);
}

function generateRandomSource() {
    $sources = ['реклама', 'сайт', 'социальные сети', 'рекомендации', 'e-mail рассылка'];
    return $sources[array_rand($sources)];
}

// Генерация 20 ложных лидов
for ($i = 0; $i < 20; $i++) {
    $lead = R::dispense('lead');
    $lead->name = generateRandomName();
    $lead->surname = generateRandomSurname();
    $lead->phone = generateRandomPhone();
    $lead->source = generateRandomSource();
    $lead->interests = "Мужская стрижка";
    $lead->status = 'new';
    $lead->created_at = time();
    $lead->updated_at = time();
    $lead->updated_on = 0;
    $lead->company = '66c84ba82df48';

    R::store($lead);
}

echo json_encode(['status' => 'success', 'message' => '20 ложных лидов успешно созданы']);
?>
