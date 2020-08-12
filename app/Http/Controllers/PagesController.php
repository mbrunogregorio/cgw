<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Tip;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

        $slides = Slide::all();
        $banners = Banner::all();
        $tips = Tip::all();
        $products = Product::all();

        return view('pages.home', compact('slides', 'banners', 'tips', 'products'));
    }

    public function produtos($slug = null){
        return 1;
    }

    public function contato(){
        return 1;
    }
}
