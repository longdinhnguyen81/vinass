<?php

namespace App\Http\Controllers\Vinass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Cat;
use App\Count;
use Cache;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function news(){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Count();
            $counter->day = $day;
            $counter->month = $month;
            $counter->all = 1;
            $counter->save();
        }else{
            $key = 'news'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	$news = News::with('cats')->with('users')->where('active',1)->paginate(9);
    	return view('vinass.news.news', compact('news'));
    }
    public function parent($slug){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Count();
            $counter->day = $day;
            $counter->month = $month;
            $counter->all = 1;
            $counter->save();
        }else{
            $key = 'parent'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	$kname = str_replace('-',' ',$slug);
    	$news = Cat::where('name', $kname)->first();
    	$pnews = Cat::with('news')->where('parent_id', $news->id)->get();
    	return view('vinass.news.parent', compact('pnews', 'kname'));
    }
    public function cat($slug, $id){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Count();
            $counter->day = $day;
            $counter->month = $month;
            $counter->all = 1;
            $counter->save();
        }else{
            $key = 'cat'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	$news = News::where('cat_id', $id)->where('active', 1)->with('cats')->with('users')->paginate(9);
    	$cat = Cat::find($id);
    	$pcat = Cat::find($cat->parent_id);
    	return view('vinass.news.cat', compact('news', 'cat', 'pcat'));
    }
    public function detail($slug, $id){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $news = News::where('id', $id)->where('active', 1)->with('cats')->with('users')->first();
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Count();
            $counter->day = $day;
            $counter->month = $month;
            $counter->all = 1;
            $counter->save();
        }else{
            $key = 'detail'.$count->id.$news->id;
            if(!Cache::get($key)){
                $count->increment('all');
                $news->increment('count');
                Cache::put($key, 1, 30);
            }
        }
        $newss = News::where('cat_id',$news->cats->id)->where('active', 1)->get();
    	$pcat = Cat::find($news->cats->parent_id);
    	return view('vinass.news.detail', compact('news', 'pcat', 'newss'));
    }
    public function getSearch(Request $request){
    	$slug = $request->name;
    	$news = News::where('title', 'like', "%$slug%")->where('active', 1)->with('cats')->with('users')->paginate(9);
    	return view('vinass.news.search', compact('news'));
    }
}
