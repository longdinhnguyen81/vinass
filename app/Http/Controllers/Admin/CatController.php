<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cat;

class CatController extends Controller
{
    public function index(){
    	$cats = Cat::where('parent_id', 0)->get();
    	$parent_cats = Cat::where('parent_id', '!=', 0)->get();
    	return view('admin.cat.index', compact('cats','parent_cats'));
    }

    public function getAdd(){
    	$cats = Cat::where('parent_id', 0)->get();
    	return view('admin.cat.add', compact('cats'));
    }

    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required',
    	]);    	
    	$cat = new Cat([
    		'name' => $request->name,
    		'parent_id' => $request->parent_id,
    	]);
    	$cat->save();

    	return redirect(route('admin.cat.index'))->with('msg', 'Thêm thành công');
    }

    public function getEdit($id){
    	$cat = Cat::find($id);
    	return view('admin.cat.edit', compact('cat'));
    }
    
    public function postEdit(Request $request, $id){
    	$cat = Cat::find($id);
    	
    	$request->validate([
    		'name' => 'required',
    	]);
    	$cat->name = $request->name;

    	$cat->update();

    	return redirect(route('admin.cat.index'))->with('msg', 'Sửa thành công');
    }

    public function delete($id){
    	$cat = Cat::find($id);
    	$cat->delete();
    	return redirect(route('admin.cat.index'))->with('msg', 'Xoá thành công');
    }
}
