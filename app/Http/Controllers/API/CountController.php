<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Count;
use App\Email;
use App\Slide;
use Carbon\Carbon;

class CountController extends Controller
{
    public function index(){
        $count = Count::limit(7)->get();
        return response()->json(['data' => $count]);
    }
    public function post(Request $request){
    	$email = new Email();
    	$request->validate([
    		'email' => 'required',
    	]);
    	$email->email = $request->email;
    	$email->save();
    	return response()->json(['data' => $email], 201);
    }
    public function put(Request $request, $id){
    	$email = Email::find($id);
    	if(!$email)
    	{
    		return response()->json(['message' => 'Not fonud email with id = '. $id], 400);
    	}
    	$email->email = $request->email;
    	$email->update();
    	return response()->json(['data' => $email], 201);
    }
    public function patch(Request $request, $id){
    	$slide = Slide::find($id);
    	$slide->active = $request->active;
    	$slide->update();
    	return response()->json(['data' => $slide]);
    }
    public function delete($id){
    	$email = Email::find($id);
    	$email->delete();
    	return response()->json(['message' => 'Delete successfully!'], 201);
    }
}
