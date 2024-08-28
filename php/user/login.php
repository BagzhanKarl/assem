<?php
require "../db.php";

$data = $_POST;
header('Content-Type: application/json; charset=utf-8');

if(isset($data['doLogin'])){
    $phone = $data['phone'];
    $cleaned_phone = preg_replace('/[^0-9]/', '', $phone);
    $user = R::findOne('user', 'phone = ?', [$cleaned_phone]);

    if($user){
        if(password_verify($data['password'], $user['password'])){
            $_SESSION['logged_user'] = $user->id;
            echo json_encode(['status' => 2001, 'data' => 'true']);
            exit;
        }
        else{
            echo json_encode(['status' => 4000, 'data' => 'Неправильный пароль']);
            exit;
        }
    }
    else{
        echo json_encode(['status' => 4000, 'data' => 'Неправильный логин']);
        exit;
    }
}
?>