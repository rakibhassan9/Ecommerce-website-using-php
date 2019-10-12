<?php


namespace App\Controllers\Frontend;
use App\Controllers\Controller;
class UserController extends Controller{

    public function getIndex(){
        
        $this->view('login');

    }


}

?>