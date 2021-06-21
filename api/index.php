<?php
//To report errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Initialize database connection
require_once dirname(__FILE__) . "/dao/BaseDao.class.php";
$base_dao = new BaseDao();

echo "/API index";

?>
