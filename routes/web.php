<?php

/**
 * Web Routes
 */

$app->router->get('/', 'HomeController@index');
$app->router->get('/about', 'AboutController@index');
$app->router->get('/news', 'NewsController@index');
$app->router->get('/intervention', 'InterventionController@index');
$app->router->get('/services', 'ServicesController@index');
$app->router->get('/contact', 'ContactController@index');
$app->router->post('/contact', 'ContactController@store');
