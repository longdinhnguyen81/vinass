<?php

namespace App\Http\Controllers\Vinass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	return view('vinass.index.index');
    }
    public function aboutus(){
    	return view('vinass.index.aboutus');
    }
    public function design(){
    	return view('vinass.index.design');
    }
    public function application(){
    	return view('vinass.index.application');
    }
    public function getContact(){
    	return view('vinass.index.contact');
    }
    public function postContact(){
    	return view('vinass.index.contact');
    }
}
