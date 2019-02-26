<?php

namespace App\Http\Controllers\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Count;
use Cache;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function indexonepage(){
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
            $key = 'index-1'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexonepage');
    }

    public function indexclassic(){
    	return view('vinass.templates.indexclassic');
    }
    
    public function indexclassiccolor(){
    	return view('vinass.templates.indexclassiccolor');
    }

    public function indexclassiclight(){
    	return view('vinass.templates.indexclassiclight');
    }

    public function indexcorporate(){
    	return view('vinass.templates.indexcorporate');
    }

    public function indexcorporate2(){
    	return view('vinass.templates.indexcorporate2');
    }

    public function indexcorporate3(){
    	return view('vinass.templates.indexcorporate3');
    }

    public function indexcorporate4(){
    	return view('vinass.templates.indexcorporate4');
    }

    public function indexcorporate5(){
    	return view('vinass.templates.indexcorporate5');
    }

    public function indexcorporate6(){
    	return view('vinass.templates.indexcorporate6');
    }

    public function indexcorporate7(){
    	return view('vinass.templates.indexcorporate7');
    }

    public function indexcorporate8(){
    	return view('vinass.templates.indexcorporate8');
    }

    public function indexcorporate9(){
    	return view('vinass.templates.indexcorporate9');
    }

    public function indexcorporate10(){
        return view('vinass.templates.indexcorporate10');
    }

    public function indexcorporate11(){
        return view('vinass.templates.indexcorporate11');
    }

    public function indexcorporate12(){
        return view('vinass.templates.indexcorporate12');
    }

    public function indexcorporate13(){
        return view('vinass.templates.indexcorporate13');
    }

    public function indexcorporate14(){
        return view('vinass.templates.indexcorporate14');
    }

    public function indexcorporate15(){
        return view('vinass.templates.indexcorporate15');
    }

    public function indexcorporate16(){
        return view('vinass.templates.indexcorporate16');
    }

    public function indexcorporate17(){
        return view('vinass.templates.indexcorporate17');
    }

    public function indexcorporate18(){
        return view('vinass.templates.indexcorporate18');
    }

    public function indexcorporate19(){
        return view('vinass.templates.indexcorporate19');
    }

    public function indexcorporate20(){
        return view('vinass.templates.indexcorporate10');
    }

    public function portfolio1(){
        return view('vinass.templates.portfolio1');
    }

    public function portfolio2(){
        return view('vinass.templates.portfolio2');
    }

    public function portfolio3(){
        return view('vinass.templates.portfolio3');
    }

    public function portfolio4(){
        return view('vinass.templates.portfolio4');
    }

    public function indexblog1(){
        return view('vinass.templates.indexblog1');
    }
    public function indexblog2(){
        return view('vinass.templates.indexblog2');
    }
    public function indexblog4(){
        return view('vinass.templates.indexblog4');
    }
    public function indexblog5(){
        return view('vinass.templates.indexblog5');
    }

    public function shop1(){
        return view('vinass.templates.shop1');
    }
    public function shop2(){
        return view('vinass.templates.shop2');
    }
    public function shop3(){
        return view('vinass.templates.shop3');
    }
    public function shop4(){
        return view('vinass.templates.shop4');
    }
    public function shop5(){
        return view('vinass.templates.shop5');
    }
    public function shop6(){
        return view('vinass.templates.shop6');
    }
    public function shop7(){
        return view('vinass.templates.shop7');
    }
    public function shop8(){
        return view('vinass.templates.shop8');
    }
    public function shop9(){
        return view('vinass.templates.shop9');
    }
    public function shop10(){
        return view('vinass.templates.shop10');
    }

    public function homestay(){
        return view('vinass.templates.homestay');
    }
    public function education(){
        return view('vinass.templates.education');
    }
}
