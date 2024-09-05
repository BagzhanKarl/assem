<?php
require "../php/db.php";
$masters = [
['firstname' => 'Айжан', 'lastname' => 'Сулейменова', 'bio' => 'Специалист по традиционному казахскому массажу и ароматерапии', 'roletitle' => 'Массажист', 'role' => 'Массажист'],
['firstname' => 'Бекзат', 'lastname' => 'Нурманов', 'bio' => 'Эксперт по спортивному массажу и реабилитации', 'roletitle' => 'Массажист', 'role' => 'Массажист'],
['firstname' => 'Гульнар', 'lastname' => 'Шакирова', 'bio' => 'Предлагает расслабляющий и антимассаж', 'roletitle' => 'Массажист', 'role' => 'Массажист'],
['firstname' => 'Ерлан', 'lastname' => 'Тулегенов', 'bio' => 'Фокусируется на медицинском массаже и коррекции осанки', 'roletitle' => 'Массажист', 'role' => 'Массажист'],
['firstname' => 'Алия', 'lastname' => 'Джангозина', 'bio' => 'Специалист по массажу для беременных и релаксации', 'roletitle' => 'Массажист', 'role' => 'Массажист']
];

$password = '12345678';
$num = 0;
foreach ($masters as $data) {
    $phone = 7777147151 . $num;
    $user = R::dispense('user');
    $user->phone = '77771471510'; // Если необходимо, добавьте телефон
    $user->firstname = $data['firstname'];
    $user->lastname = $data['lastname'];
    $user->role = 4;
    $user->company = 1; // Убедитесь, что переменная $company существует
    $user->create_at = time();
    $user->update_at = time();
    $user->is_active = 1; // Устанавливаем активным
    $user->is_verify = 1; // Устанавливаем подтвержденным
    $user->is_superuser = 0;

    // Устанавливаем пароль
    $user->password = password_hash($password, PASSWORD_DEFAULT);

    R::store($user);

    $specialist = R::dispense('specialist');
    $specialist->user = $user;
    $specialist->bio = $data['bio'];
    $specialist->roletitle = $data['roletitle'];
    R::store($specialist);

    $num = $num+1;
}
?>
