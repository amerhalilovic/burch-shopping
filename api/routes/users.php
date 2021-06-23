<?php

//Prebaceno u index da svi mogu koristis
//Flight::map('query', function ($name, $default_value = NULL) {
//    $request = Flight::request();
//    $query_param = @$request->query->getData()[$name];
//    $query_param = $query_param ? $query_param : $default_value;
//    return $query_param;
//});

Flight::route('GET /users', function () {
//    @ ignore error
//    $offset = @Flight::request()->query->getData()['offset'];
//    $limit = @Flight::request()->query->getData()['limit'];
//    $offset = $offset ? $offset : 0;
//    $limit = $limit ? $limit : 25;

    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 25);

    $search = Flight::query('search', '');
//Prebaceno u service
//    if ($search) {
//        Flight::json(Flight::userDao()->get_user_search($search, $offset, $limit));
//    } else {
//        Flight::json(Flight::userDao()->get_all($offset, $limit));
//    }

    Flight::json(Flight::userService()->get_users($search, $offset, $limit));
});

Flight::route('GET /users/@id', function ($id) {
    Flight::json(Flight::userDao()->get_user_by_id($id));
});

Flight::route('POST /users', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::userDao()->add($data));
});

Flight::route('PUT /users/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::userDao()->update($id, $data);
    Flight::json(Flight::userDao()->get_user_by_id($id));
});


?>

