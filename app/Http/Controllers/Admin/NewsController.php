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
        $cats = Cat::all();
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
    	$news = new News([
    		'title' => $request->title,
    		'description' => $request->description,
            'detail' => $request->detail,
    		'cat_id' => $request->cat_id
    	]);
    	if($request->file('picture') != null){
    		$path = $request->file('picture');
			$images =  $path->store('/', ['disk' => 'upload']);
            $news->picture = $images;
        }
    	$news->save();

    	return redirect(route('admin.news.index'))->with('msg', 'Thêm thành công');
    }

    public function getEdit($id){
    	$news = News::find($id);
    	return view('admin.news.edit', compact('news'));
    }
    
    public function postEdit(Request $request, $id){
    	$news = News::find($id);
    	$old_picture = $news->avatar;
    	$request->validate([
    		'name' => 'required',
    		'description' => 'required',
    		'job' => 'required',
    	]);

    		$news->name = $request->name;
    		$news->description = $request->description;
    		$news->job = $request->job;
    	if($request->file('avatar') != null){
            $path = $request->file('avatar');
			$images =  $path->store('/', ['disk' => 'upload']);
            $news->avatar = $images;
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
