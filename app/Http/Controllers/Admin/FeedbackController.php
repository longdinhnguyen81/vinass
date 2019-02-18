<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function index(){
    	$feedbacks = Feedback::all();
    	return view('admin.feedback.index', compact('feedbacks'));
    }

    public function getAdd(){
    	return view('admin.feedback.add');
    }

    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'description' => 'required',
    		'avatar' => 'required',
    		'job' => 'required',
    	]);    	
    	$feedback = new Feedback([
    		'name' => $request->name,
    		'description' => $request->description,
    		'job' => $request->job
    	]);
    	if($request->file('avatar') != null){
    		$path = $request->file('avatar');
			$images =  $path->store('/', ['disk' => 'upload']);
            $feedback->avatar = $images;
        }
    	$feedback->save();

    	return redirect(route('admin.feedback.index'))->with('msg', 'Thêm thành công');
    }

    public function getEdit($id){
    	$feedback = Feedback::find($id);
    	return view('admin.feedback.edit', compact('feedback'));
    }
    
    public function postEdit(Request $request, $id){
    	$feedback = Feedback::find($id);
    	$old_picture = $feedback->avatar;
    	$request->validate([
    		'name' => 'required',
    		'description' => 'required',
    		'job' => 'required',
    	]);

    		$feedback->name = $request->name;
    		$feedback->description = $request->description;
    		$feedback->job = $request->job;
    	if($request->file('avatar') != null){
            $path = $request->file('avatar');
			$images =  $path->store('/', ['disk' => 'upload']);
            $feedback->avatar = $images;
		}
    	$feedback->update();

    	return redirect(route('admin.feedback.index'))->with('msg', 'Sửa thành công');
    }

    public function delete($id){
    	$feedback = Feedback::find($id);
    	$feedback->delete();
    	return redirect(route('admin.feedback.index'))->with('msg', 'Xoá thành công');
    }
}
