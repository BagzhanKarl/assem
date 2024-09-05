<?php
require '../db.php'; // Путь к RedBeanPHP

// Проверка, что форма отправлена
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
    $data = $_POST;

    $phone = $data['userphone'];
    $cleaned_phone = preg_replace('/[^0-9]/', '', $phone);

    $category = R::dispense('category');
    $category->company = $company->id;
    $category->name = $data['category'];
    $category->created_at = time();
    $category->updated_at = time();
    R::store($category);

    $service = R::dispense('service');
    $service->company = $company->id;
    $service->name = $data['service_name'];
    $service->duration = $data['duration'];
    $service->category = $category;
    $service->price = $data['service_price'];


    $user = R::dispense('user');
    $user->firstname = $data['username'];
    $user->phone = $cleaned_phone;

    $user->create_at = time();
    $user->update_at = time();
    $user->is_active = 1;
    $user->is_verify = 0;
    $user->is_superuser = 0;
    $user->company = $company->id;

    $resetCompany = R::findOne('company', 'id = ?', [$company->id]);
    $resetCompany->street = $data['street'];
    $resetCompany->home = $data['home'];
    $resetCompany->update_at = time();

    $schedule = R::dispense('schedule');
    $schedule->company = $company->id;

    $schedule->monday = 1;
    $schedule->tuesday = 1;
    $schedule->wednesday = 1;
    $schedule->thursday = 1;
    $schedule->friday = 1;
    $schedule->saturday = 1;
    $schedule->sunday = 1;

    $schedule->monStart = $data['time'] . ":00";
    $schedule->tueStart = $data['time'] . ":00";
    $schedule->wedStart = $data['time'] . ":00";
    $schedule->thuStart = $data['time'] . ":00";
    $schedule->friStart = $data['time'] . ":00";
    $schedule->satStart = $data['time'] . ":00";
    $schedule->sunStart = $data['time'] . ":00";

    R::store($schedule);
    R::store($resetCompany);
    R::store($user);
    R::store($service);

    $statusChange = R::findOne('user', 'id = ?', [$_SESSION['logged_user']]);
    $statusChange->follow = 'link';
    R::store($statusChange);

    $link = R::dispense('link');
    $link->company = $company->id;
    $link->link = "https://jaz." . $_SERVER['HTTP_HOST'] . "/?cmp=" . $company->publicid;
    R::store($link);

    $masters = R::dispense('masters');
    $masters->company = $company->id;
    $masters->user = $user->id;
    $masters->role = $data['userrole'];
    R::store($masters);

    header('Location: ../../business/');
} else {
    echo "Неверный запрос.";
}
?>
