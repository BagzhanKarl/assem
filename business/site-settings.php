<?php
require "../php/db.php";

$user = R::findOne('user', 'id = ?', [$_SESSION['logged_user']]);
if($user->follow == 'new'){
    header('Location: new-site-settings.php');
}
?>