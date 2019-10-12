<?php
namespace App\Controllers;

class Controller{

    public function view($data='index'):void
    {
        require_once __DIR__ . '/../../views/'.$data.'.php';
    }
}


?>