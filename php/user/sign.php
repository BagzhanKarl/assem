<?php
require "../db.php";

$data = $_POST;
header('Content-Type: application/json; charset=utf-8');


if (isset($data['signStart'])) {
    $phone = $data['phone'];
    $cleaned_phone = preg_replace('/[^0-9]/', '', $phone);

    // Проверка совпадения паролей
    if ($data['password'] != $data['confirmPassword']) {
        echo json_encode(['status' => 4000, 'data' => 'Пароли не совпадают']);
        exit;
    }

    if (R::findOne('user', 'phone = ?', [$cleaned_phone])) {
        echo json_encode(['status' => 4000, 'data' => 'Пользователь с номером телефона уже зарегистрирован']);
        exit;
    }

    // Создание нового пользователя
    $user = R::dispense('user');
    $user->phone = $cleaned_phone;
    $user->firstname = $data['firstName'];
    $user->lastname = $data['lastName'];
    $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
    $user->create_at = time();
    $user->update_at = time();
    $user->is_active = 1;
    $user->is_verify = 0;
    $user->is_superuser = 0;

    try {
        R::store($user);
        $_SESSION['logged_user'] = $user->id;
        echo json_encode(['status' => 2001, 'data' => 'true']);
    } catch (Exception $e) {
        echo json_encode(['status' => 4000, 'data' => 'Ошибка системы, попробуйте через 1 минуту']);
    }

    exit;
}


if(isset($data['signSecond'])){
    $company = R::dispense('company');
    $company->name = $data['company'];
    $company->filials = $data['filials'];
    $company->cteate_at = time();
    $company->update_at = time();
    $company->publicid = uniqid();
    R::store($company);

    $user = R::findOne('user', 'id = ?', [$_SESSION['logged_user']]);
    $user->role = $data['role'];
    $user->company = $company->id;
    $user->update_at = time();
    R::store($user);
    try {
        echo json_encode(['status' => 2001, 'data' => 'true']);
    } catch (Exception $e) {
        echo json_encode(['status' => 4000, 'data' => 'Ошибка системы, попробуйте через 1 минуту']);
    }
}

if(isset($data['laststep'])){
    $user = R::findOne('user', 'id = ?', [$_SESSION['logged_user']]);
    $company = R::findOne('company', 'id = ?', [$user->company]);
    $company->type = $data['types'];
    $company->area = $data['areas'];
    $company->employ = $data['employes'];
    $company->update_at = time();
    R::store($company);

    try {
        echo json_encode(['status' => 2001, 'data' => 'true']);
    } catch (Exception $e) {
        echo json_encode(['status' => 4000, 'data' => 'Ошибка системы, попробуйте через 1 минуту']);
    }

}