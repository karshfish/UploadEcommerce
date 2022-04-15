<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeControlller extends Controller
{
    //
    public function redirect(){
        $type=Auth::user()->usertype ??'0';
        if($type=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view ('UserHome');
        }
    }
    public function index(){
        return view('UserHome');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function products(){
        return view('products');
    }
}
