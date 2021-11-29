<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index(){
        $data = Post::all();
        
        return view('home',compact('data'));
    }

   
}
