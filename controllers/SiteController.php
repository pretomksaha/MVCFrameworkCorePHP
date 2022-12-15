<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home(){
        $param = [
            'name' => "Pretom"
        ];
        return $this->render('home', $param);
    }

    public function contact(){
        return $this->render('contact');
    }

    public static function handleContact(Request $request){

        $body = $request->getBody();
        return "handle contact form";
    }
}