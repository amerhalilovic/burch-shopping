<?php
//To report errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//flight
require dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . "/dao/UserDao.class.php";

//includam service
require_once dirname(__FILE__) . "/services/UserService.class.php";

//Register your class
Flight::register('userDao', "UserDao");

//Register service
Flight::register('userService', "UserService");

//Funkcija za query parametre util
Flight::map('query', function ($name, $default_value = NULL) {
    $request = Flight::request();
    $query_param = @$request->query->getData()[$name];
    return $query_param ? $query_param : $default_value;
});


//Posto su prekopirane rute u folder poseban,sad treba importat
require_once dirname(__FILE__) . "/routes/users.php";


//Initialize database connection
//require_once dirname(__FILE__) . "/dao/BaseDao.class.php";
//$base_dao = new BaseDao();

//echo "/API index";


Flight::route('/', function () {
    echo 'hello world';
});

//Rute su prekopirane u routes/user

//Flight::route('GET /users', function () {
//    $users = Flight::userDao()->get_all(0, 10);
//    Flight::json($users);
//});
//
//Flight::route('GET /users/@id', function ($id) {
//
//    $user = Flight::userDao()->get_user_by_id($id);
//    Flight::json($user);
//});

//Flight::route('POST /users', function () {
//    $request = Flight::request();
//    $data = $request->data->getData();
//    $user = Flight::userDao()->add($data);
//    Flight::json($user);
////    $user_dao = new UserDao();
////    $user = $user_dao->get_user_by_id($id);
////    Flight::json($user);
//});

//
//Flight::route('PUT /users/@id', function ($id) {
//    $request = Flight::request();
//    $data = $request->data->getData();
//    Flight::userDao()->update($id, $data);
//    $user = Flight::userDao()->get_user_by_id($id);
////    $user = $dao->update($id, $data);
////    $user_dao = new UserDao();
////    $user = $user_dao->get_user_by_id($id);
//    Flight::json($user);
//});
//

Flight::start();
?>
