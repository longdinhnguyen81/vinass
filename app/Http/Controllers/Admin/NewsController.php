<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Cat;
use App\Users;

class NewsController extends Controller
{
    public function index(){
    	$news = News::with('cats')->with('users')->get();
    	return view('admin.news.index', compact('news'));
    }

    public function getAdd(){
        $cats = Cat::where('parent_id','!=', 0)->get();
        $users = Users::all();
    	return view('admin.news.add', compact('cats', 'users'));
    }

    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'detail' => 'required',
            'picture' => 'required',
    		'cat_id' => 'required',
    	]);
        $username = $request->session()->get('username');
        $users = Users::where('username', $username)->first();
    	$news = new News([
    		'title' => $request->title,
    		'description' => $request->description,
            'detail' => $request->detail,
            'cat_id' => $request->cat_id,
            'user_id' => $users,
    	]);
        if($request->file('picture') != null){
            $path = $request->file('picture');
            $picture =  $path->store('/', ['disk' => 'upload']);
            $news->picture = $picture;
        }
    	if($request->file('image') != null){
    		$path = $request->file('image');
			$image =  $path->store('/', ['disk' => 'upload']);
            $news->image = $image;
        }
    	$news->save();

    	return redirect(route('admin.news.index'))->with('msg', 'Thêm thành công');
    }

    public function getEdit($id){
    	$news = News::find($id);
        $cats = Cat::where('parent_id','!=', 0)->get();
    	return view('admin.news.edit', compact('news','cats'));
    }
    
    public function postEdit(Request $request, $id){
    	$news = News::find($id);
    	$old_picture = $news->picture;
		$request->name?$news->name = $request->name:'';
        $request->description?$news->description = $request->description:'';
		$request->detail?$news->detail = $request->detail:'';
		$request->job?$news->job = $request->job:'';
        if($request->file('picture') != null){
            $path = $request->file('picture');
            $picture =  $path->store('/', ['disk' => 'upload']);
            $news->picture = $picture;
        }
    	if($request->file('image') != null){
            $path = $request->file('image');
			$image =  $path->store('/', ['disk' => 'upload']);
            $news->picture = $image;
		}
    	$news->update();

    	return redirect(route('admin.news.index'))->with('msg', 'Sửa thành công');
    }

    public function delete($id){
    	$news = News::find($id);
    	$news->delete();
    	return redirect(route('admin.news.index'))->with('msg', 'Xoá thành công');
    }
}
