<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    Public function showUserName(){
        return 'xGamaRays';
    }

    public function getIndex(){


        $obj = new \stdClass();

        $obj->name = 'xGamaRays';
        $obj->age = 20;

        $data=[];

        return view('welcome', compact('data'));
    }

    public function showLanding(){
        return view('landing');
    }
}

