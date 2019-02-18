<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;

class SlideController extends Controller
{
    public function index(){
    	$slides = Slide::all();
    	return view('admin.slide.index', compact('slides'));
    }

    public function getAdd(){
    	return view('admin.slide.add');
    }

    public function postAdd(Request $request){
    	$request->validate([    		'picture' => 'required',
    	]);    	
    	$slide = new Slide();
    	if($request->file('picture') != null){
    		$path = $request->file('picture');
			$images =  $path->store('/', ['disk' => 'upload']);
            $slide->picture = $images;
        }
    	$slide->save();

    	return redirect(route('admin.slide.index'))->with('msg', 'Thêm thành công');
    }

    public function getEdit($id){
    	$slide = Slide::find($id);
    	return view('admin.slide.edit', compact('slide'));
    }
    
    public function postEdit(Request $request, $id){
    	$slide = Slide::find($id);
    	if($request->file('picture') != null){
            $path = $request->file('picture');
			$images =  $path->store('/', ['disk' => 'upload']);
            $slide->picture = $images;
		}
    	$slide->update();

    	return redirect(route('admin.slide.index'))->with('msg', 'Sửa thành công');
    }

    public function delete($id){
    	$slide = Slide::find($id);
    	$slide->delete();
    	return redirect(route('admin.slide.index'))->with('msg', 'Xoá thành công');
    }
}
