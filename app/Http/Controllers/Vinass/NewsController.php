<?php

namespace App\Http\Controllers\Vinass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function cat(){
    	return view('vinass.news.cat');
    }
    public function detail(){
    	return view('vinass.news.detail');
    }
}
