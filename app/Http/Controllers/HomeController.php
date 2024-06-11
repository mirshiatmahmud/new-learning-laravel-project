<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){
        $this->data['name'] = 'shifat';
        $this->data['age'] = 4857;
        $this->data['subject'] = ['bangla','english','math'];
        $this->data['marks']   = [12,45,78];

        return view('home.index',$this->data);
    }
}
