<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Count;
use App\News;
use App\Contact;

class IndexController extends Controller
{
    public function index(Request $request){
    	$contact = Contact::all();
    	$new = News::all();
		$counts = Count::limit(7)->get();
    	return view('admin.index.index', compact('counts', 'contact', 'new'));
    }
}
