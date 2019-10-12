<?php

namespace App\Controllers\Frontend;
use App\Controllers\Controller;
class HomeController extends Controller{

    public function getIndex(){

        //require_once __DIR__ . '/../../views/home.php';
        $this->view('home');
        
    }

}