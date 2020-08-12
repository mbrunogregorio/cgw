<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function produtos($slug = null){
        return 1;
    }

    public function contato(){
        return 1;
    }
}
