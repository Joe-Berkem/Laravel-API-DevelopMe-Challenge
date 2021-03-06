<?php

$router->group(["prefix" => "articles"], function ($router) {

    $router->post("", "Articles@store");
    $router->get("", "Articles@index");
    $router->get("{article}", "Articles@show");
    $router->put("{article}", "Articles@update");
    $router->delete("{article}", "Articles@destroy");

    $router->post("{article}/comments", "Comments@store");
    $router->get("{article}/comments", "Comments@index");


});

