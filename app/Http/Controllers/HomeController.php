<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function payments(){
        return view('payments');
    }
    
    public function alumni(){
        return view('alumni');
    }

    public function curriculum(Request $request, $id, $id1){
        return view('curriculum');
    }
    public function faqs(){
        return view('faqs');
    }

    public function news(){
        return view('news');
    }

    public function staff(){
        return view('staff');
    }

    public function gallery(){
        return view('gallery');
    }
}
