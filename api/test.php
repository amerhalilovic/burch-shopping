<?php
//To report errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__) . "/dao/UserDao.class.php";
require_once dirname(__FILE__) . "/dao/Employee.class.php";

$user_dao = new UserDao();
$employee_dao = new EmployeeDao();

//$user = $user_dao->get_user_by_email("amer.malibu@gmail.com");
//$user = $user_dao->get_user_by_id(1);

$user_info = [
    "name" => "Amer Halilovic",
    "email" => "amercko@evolt.dev",
    "phone" => "123456",
    "daysOff" => "20",
    "daysSpent" => "13",
];

//$empa = $employee_dao->add_employee($user_info);

//print_r($empa);

?>