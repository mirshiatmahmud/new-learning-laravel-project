<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){
        $this->data['name'] = 'mir shifat';

        return view('home.index',$this->data);
    }
}
