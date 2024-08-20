<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::categoryOrderByName()->get();
        return view('client.home',compact('categories'));
    }
    public function contact(){
        return view('client.contact');
    }
    public function forgotpass(){
        return view('client.forgotpass');
    }
    public function news(){
        return view('client.news');
    }
    public function productdetail(){
        return view('client.productdetail');
    }
    public function uprofile(){
        $user = User::orderBy('id', 'DESC')->get();
        return view('client.uprofile',compact('user'));
    }
}
