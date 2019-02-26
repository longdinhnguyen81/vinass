<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;

class UserController extends Controller
{
    public function index(){
    	$users = Users::all();
  	return view('admin.user.index', compact('users'));
    }

    public function getAdd(){
    	return view('admin.user.add');
    }

    public function postAdd(Request $request){
    	$request->validate([
    		'username' => 'required',
    		'password' => 'required',
    		'fullname' => 'required',
    		'detail' => 'required',
    	]);
    	$user = new Users([
    		'username' => $request->username,
    		'password' => trim(bcrypt($request->password)),
    		'fullname' => $request->fullname,
    		'detail' => $request->detail,
    	]);
    	if($request->file('avatar') != null){
            $path = $request->file('avatar');
			$images =  $path->store('/', ['disk' => 'upload']);
            $user->avatar = $images;
		}
    	$user->save();

    	return redirect(route('admin.user.index'))->with('msg', 'Thêm thành công');
    }

    public function getEdit($id){
    	$user = Users::find($id);
    	return view('admin.user.edit', compact('user'));
    }
    
    public function postEdit(Request $request, $id){
    	$user = Users::find($id);
    	
    	$request->validate([
    		'username' => 'required',
    		'fullname' => 'required',
    		'detail' => 'required',
    	]);

    	$user->username = $request->username;
    	$request->password ? $user->password = trim(bcrypt($request->password)) : '';
    	$user->fullname = $request->fullname;
    	$user->detail = $request->detail;

    	if($request->file('avatar') != null){
            $path = $request->file('avatar');
			$images =  $path->store('/', ['disk' => 'upload']);
            $user->avatar = $images;
		}

    	$user->update();

    	return redirect(route('admin.user.index'))->with('msg', 'Sửa thành công');
    }

    public function delete($id){
    	$user = Users::find($id);
    	$user->delete();
    	return redirect(route('admin.user.index'))->with('msg', 'Xoá thành công');
    }
}
