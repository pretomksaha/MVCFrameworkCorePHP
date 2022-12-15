<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;

class AuthControllers extends Controller
{
    public function login(){
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request){

        if($request->isPost()){
            $registerModel = new RegisterModel();
            return 'Handle submitted data';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }

}