<?php
//To report errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__) . "/dao/UserDao.class.php";

$user_dao = new UserDao();

//$user = $user_dao->get_user_by_email("amer.malibu@gmail.com");
//$user = $user_dao->get_user_by_id(1);

$user_info = [
    "name" => "Amer Halilovic",
    "email" => "dzeneta.hajro@evolt.dev",
    "password" => "admin123"
];


$user = $user_dao->update_user(1,$user_info);
print_r($user);

?>