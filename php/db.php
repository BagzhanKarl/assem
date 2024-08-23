<?php
require "db/rb-mysql.php";
R::setup( 'mysql:host=localhost;dbname=assem',
    'root', '' );
session_start();

function checkAuth()
{
    if(!$_SESSION['logged_user']){
        header('Location: ../auth');
    }
}

?>