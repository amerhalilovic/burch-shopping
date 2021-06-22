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



//print_r($_GET);
$user_info = [
    "name" => "Amer Halilovic",
    "email" => "amercko@evolt.dev",
    "phone" => "123456",
    "daysOff" => "20",
    "daysSpent" => "13",
];

$user = $user_dao->get_all($_GET['offset'], $_GET['limit']);

//Format to json
echo json_encode($user);
//json_encode($user,JSON_PRETTY_PRINT);
//JSON_PRETTY_PRINT - formatiran json


//$empa = $employee_dao->add_employee($user_info);

//print_r($empa);


?>