<?php

namespace App\Http\Controllers\Vinass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Cat;

class NewsController extends Controller
{
    public function news(){
    	$news = News::with('cats')->with('users')->where('active',1)->paginate(9);
    	return view('vinass.news.news', compact('news'));
    }
    public function parent($slug){
    	$kname = str_replace('-',' ',$slug);
    	$news = Cat::where('name', $kname)->first();
    	$pnews = Cat::with('news')->where('parent_id', $news->id)->get();
    	return view('vinass.news.parent', compact('pnews', 'kname'));
    }
    public function cat($slug, $id){
    	$news = News::where('cat_id', $id)->where('active', 1)->with('cats')->with('users')->paginate(9);
    	$cat = Cat::find($id);
    	$pcat = Cat::find($cat->parent_id);
    	return view('vinass.news.cat', compact('news', 'cat', 'pcat'));
    }
    public function detail($slug, $id){
    	$news = News::where('id', $id)->where('active', 1)->with('cats')->with('users')->first();
    	$pcat = Cat::find($news->cats->parent_id);
    	return view('vinass.news.detail', compact('news', 'pcat'));
    }
    public function getSearch(Request $request){
    	$slug = $request->name;
    	$news = News::where('title', 'like', "%$slug%")->where('active', 1)->with('cats')->with('users')->paginate(9);
    	return view('vinass.news.search', compact('news'));
    }
}
