<?php

namespace App\Http\Controllers\Vinass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\Contact;
use App\News;
use App\Cat;
use App\Count;
use Cache;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index(){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Count();
            $counter->day = $day;
            $counter->month = $month;
            $counter->index = 1;
            $counter->all = 1;
            $counter->save();
        }else{
            $key = 'index'.$count->id;
            if(!Cache::get($key)){
                $count->increment('index');
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        $news = News::where('active', 1)->limit(4)->get();
    	return view('vinass.index.index', compact('news'));
    }
    public function aboutus(){
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
            $key = 'about'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.index.aboutus');
    }
    public function design(){
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
            $key = 'design'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        $feedbacks = Feedback::where('active',1)->get();
    	return view('vinass.index.design', compact('feedbacks'));
    }
    public function application(){
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
            $key = 'application'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        $feedbacks = Feedback::where('active',1)->get();
    	return view('vinass.index.application', compact('feedbacks'));
    }
    public function getContact(){
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
            $key = 'contact'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.index.contact');
    }
    public function postContact(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact = new Contact([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        $contact->save();
        return redirect(route('vinass.index.contact'))->with('msg', 'Gửi liên hệ thành công!');

    }
    public function templates(){
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
            $key = 'templates'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.index.templates');
    }

     public function sitemap()
    {
        $sitemap = app()->make('sitemap');

        // Cache kết quả 60 phút
        $sitemap->setCache('https://vinasofts.vn/', 30);
        if (!$sitemap->isCached()) {
            $sitemap->add(url('/'), Carbon::now(), 1, 'daily');
            $sitemap->add(url('/gioi-thieu'), Carbon::now(), .8, 'daily');
            $sitemap->add(url('/thiet-ke-web'), Carbon::now(), .8, 'daily');
            $sitemap->add(url('/giao-dien'), Carbon::now(), .8, 'daily');
            $sitemap->add(url('/ung-dung'), Carbon::now(), .8, 'daily');
            $sitemap->add(url('/lien-he'), Carbon::now(), .8, 'daily');
            $sitemap->add(url('/blog'), Carbon::now(), .8, 'daily');
            $sitemap->add(url('/blogs/front-end'), Carbon::now(), 1, 'daily');
            $sitemap->add(url('/blogs/back-end'), Carbon::now(), 1, 'daily');
            $sitemap->add(url('/blogs/api'), Carbon::now(), 1, 'daily');
            $sitemap->add(url('/blogs/khac'), Carbon::now(), 1, 'daily');
            // add danh mục
            $cats = Cat::where('parent_id','!=',0)->get();
            foreach($cats as $cat){
                $slug = str_slug($cat->name);
                $id = $cat->id;
                $sitemap->add(url('/blog/'.$slug.'-'.$id), Carbon::now(), 0.8, 'daily');
            }
            // add bài viết
            $posts = News::where('active', 1)->get();
            foreach ($posts as $post) {
                $slug = str_slug($post->name);
                //$sitemap->add(url, thời gian, độ ưu tiên, thời gian quay lại)
                $sitemap->add(route( "vinass.news.detail",['slug' => $slug, 'id' => $post->id] ), $post->updated_at, 0.8, 'daily');
            }
        }
        // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        return $sitemap->render('xml');
    }
}
