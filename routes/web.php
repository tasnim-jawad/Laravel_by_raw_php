<?php
    include_once('./routes/Route.php');

    $app = new Route();
    $app->get('/','websiteController@home');
    $app->get('/about', 'websiteController@about')->param('name');
    $app->post('/about/submit', 'websiteController@aboutSubmit');

    $app->get('/contact', 'ContactController@contact')->param('id','name');
    $app->post('/contact/submit', 'ContactController@contactSubmit');
    
    $app->get('/user', 'websiteController@user');
    $app->post('/user/submit', 'websiteController@userSubmit');
    
    $app->start();