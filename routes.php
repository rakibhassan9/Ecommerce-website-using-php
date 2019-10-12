<?php


$router ->controller('ecommercepro', \App\Controllers\Frontend\HomeController::class);
$router ->controller('ecommercepro/users', \App\Controllers\Frontend\UserController::class);
$router ->controller('ecommercepro/dashboard', \App\Controllers\Backend\DashboardController::class);