<?php
require "db/rb-mysql.php";
R::setup( 'mysql:host=192.168.1.105;dbname=assem',
    'root', '' );
session_start();

function checkAuth()
{
    if(!$_SESSION['logged_user']){
        header('Location: ../auth');
    }
}
$company = R::findOne('company', 'id = ?', [R::findOne('user', 'id = ?', [$_SESSION['logged_user']])->company]);
?>