<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $data = [
            'name' => 'ud',
            'age' => 25,
            'email' => 'sifat1@gmail.com',
            'password' => 123456
            
        ];

        User::create($data);

        return 'user create';
    }

    public function index(){
        $users = User::all();
        return $users;
    }

    public function show($id){
        $user = User::find($id);
        return $user;
    }

    public function edit($id){
        $user = User::find($id);
        $user->name = 'new name';
        $user->save();

        return 'data updated';
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return 'data deleted';
    }
}
