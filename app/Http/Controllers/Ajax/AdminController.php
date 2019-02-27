<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\Slide;
use App\News;
use App\Count;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function activeFeedback(Request $request){
    	$id = $request->id;
    	$feedback = Feedback::find($id);
    	if($feedback->active == 0){
    		$feedback->active = 1;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
    	}else{
    		$feedback->active = 0;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
    	}
    	$feedback->save();
    	return $return;
    }
    public function activeSlide(Request $request){
        $id = $request->id;
        $slide = Slide::find($id);
        if($slide->active == 0){
            $slide->active = 1;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
        }else{
            $slide->active = 0;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
        }
        $slide->save();
        return $return;
    }
    public function activeNews(Request $request){
    	$id = $request->id;
    	$news = News::find($id);
    	if($news->active == 0){
    		$news->active = 1;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
    	}else{
    		$news->active = 0;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
    	}
    	$news->save();
    	return $return;
    }
}
