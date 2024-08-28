<?php
require "db.php";
header('Content-Type: application/json; charset=utf-8');

$data = $_POST;
if(isset($data['submit'])){
    $phone = $data['phone'];
    $cleaned_phone = preg_replace('/[^0-9]/', '', $phone);
    if(R::findOne('users', 'phone = ?', [$cleaned_phone])){
        if($data['password'] == $data['confirmPassword']){
            $user = R::dispense("users");
            $user->phone =$cleaned_phone;
            $user->name = $data['name'];
            $user->surname = $data['surname'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            $user->balance = 100;
            $user->created_at = time();
            $user->updated_at = time();
            $user->avatar = "avatar-1.jpg";
            $user->user_type = 1;
            $user->ban = 1;
            $user->verify = 1;
            $user->verify_code = rand(100000, 999999);
            R::store($user);
            echo json_encode(['status' => true, 'data' => 'Пользователь зарегистрирован']);

        }
        else{
            echo json_encode(['status' => false, 'data' => 'Пароли не совпадают']);
        }
    }
    else{
        echo json_encode(['status' => false, 'data' => 'Пользователь с этим номером уже зарегистрирован']);
    }
}
?>