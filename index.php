<?php

require __DIR__ . "/vendor/autoload.php";

$klein = new \Klein\Klein();

$klein->respond(array("POST", "GET"), "/", function() {
    require "./home.php";
});
$klein->respond(array("POST", "GET"), "/auth", function() {
    require "./auth/index.php";
});
$klein->respond(array("POST", "GET"), "/404", function($request) {
    require "./404.php";
});
$klein->respond(array("POST", "GET"), "/[:name]", function($request, $response) {
    $response->redirect("./404", 404);
});

$klein->dispatch();