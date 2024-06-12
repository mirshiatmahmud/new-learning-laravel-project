<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function customer(){
        $data = DB::table('customers')
                    ->select('customers.name','salary.salary')
                    ->where('name','shifat')
                    ->join('salary','customers.id','=','salary.customer_id')
                    ->get();



        return dd($data);
    }
}
