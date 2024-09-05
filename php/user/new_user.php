<?php
require "../db.php";
require "../whatsapp/sendMessage.php";

header('Content-Type: application/json; charset=utf-8');
$data = $_POST;
$phone = $data['phone'];
$cleaned_phone = preg_replace('/[^0-9]/', '', $phone);


$user = R::dispense('user');
$user->phone = $cleaned_phone;
$user->firstname = $data['firstname'];
$user->lastname = $data['lastname'];
$user->role = $data['role'];
$user->company = $company->id;
$user->create_at = time();
$user->update_at = time();
$user->is_active = 0;
$user->is_verify = 0;
$user->is_superuser = 0;

if(isset($data['avatar'])){
    echo "Есть фото<hr>";
}
R::store($user);
$employeeName = $user->firstname;
$resetLink = 'https://beta.assemcrm.kz/auth/set-password.php?userid=' . $user->id;
$crmName = 'AssemCRM';

$message = "Здравствуйте, $employeeName!

Вас добавили в нашу CRM-систему. Пожалуйста, выполните следующие шаги для настройки вашего аккаунта:

1. *Установите пароль*: Перейдите по $resetLink и следуйте инструкциям, чтобы создать новый пароль для вашего аккаунта.
2. *Добавьте фото*: Войдите в систему и загрузите ваше фото в разделе 'Профиль'.

Если у вас возникнут вопросы, не стесняйтесь обращаться в поддержку.

С уважением,  
Команда $crmName
";
sendTextMessage($cleaned_phone, $message);

