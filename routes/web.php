<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/register','RegistrationController@onRegister');
$router->post('/login','LoginController@onLogin');


$router->post('/insert',['middleware'=>'auth','uses'=>'PhoneBookController@onInsert']);
$router->get('/select',['middleware'=>'auth','uses'=>'PhoneBookController@onSelect']);
$router->delete('/delete',['middleware'=>'auth','uses'=>'PhoneBookController@onDelete']);