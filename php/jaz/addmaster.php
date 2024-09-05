<?php
require "../db.php";
$data = $_POST;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $data['phone'];
    $cleaned_phone = preg_replace('/[^0-9]/', '', $phone);
    $user = R::dispense('user');
    $user->firstname = $data['firstname'];
    $user->surname = $data['surname'];
    $user->phone = $cleaned_phone;

    $user->create_at = time();
    $user->update_at = time();
    $user->is_active = 1;
    $user->is_verify = 0;
    $user->is_superuser = 0;
    $user->company = $company->id;
    R::store($user);

    $masters = R::dispense('masters');
    $masters->company = $company->id;
    $masters->user = $user->id;
    $masters->role = $data['role'];
    R::store($masters);

    header('Location: ../../business/masters.php');
}
print_r($data);

?>