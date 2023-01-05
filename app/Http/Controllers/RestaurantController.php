<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index()
    {

         return view('home');
    }

    public function forward(){

        $type=Auth::user()->user_type;
        if($type=='1')
        {
            return view('admin.admin_home');
            
        }else
        {
            return view('home');
            
        }
    }
}
