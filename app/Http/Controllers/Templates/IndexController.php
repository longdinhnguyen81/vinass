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
            $key = 'index-2'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexclassic');
    }
    
    public function indexclassiccolor(){
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
            $key = 'index-3'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexclassiccolor');
    }

    public function indexclassiclight(){
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
            $key = 'index-4'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexclassiclight');
    }

    public function indexcorporate(){
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
            $key = 'index-5'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate');
    }

    public function indexcorporate2(){
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
            $key = 'index-6'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate2');
    }

    public function indexcorporate3(){
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
            $key = 'index-7'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate3');
    }

    public function indexcorporate4(){
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
            $key = 'index-8'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate4');
    }

    public function indexcorporate5(){
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
            $key = 'index-9'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate5');
    }

    public function indexcorporate6(){
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
            $key = 'index-10'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate6');
    }

    public function indexcorporate7(){
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
            $key = 'index-11'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate7');
    }

    public function indexcorporate8(){
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
            $key = 'index-12'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate8');
    }

    public function indexcorporate9(){
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
            $key = 'index-13'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
    	return view('vinass.templates.indexcorporate9');
    }

    public function indexcorporate10(){
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
            $key = 'index-14'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexcorporate10');
    }

    public function indexcorporate14(){
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
            $key = 'index-15'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexcorporate14');
    }

    public function indexcorporate16(){
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
            $key = 'index-16'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexcorporate16');
    }

    public function indexcorporate17(){
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
            $key = 'index-17'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexcorporate17');
    }

    public function indexcorporate19(){
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
            $key = 'index-18'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexcorporate19');
    }

    public function indexcorporate20(){
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
            $key = 'index-19'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexcorporate10');
    }

    public function indexblog1(){
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
            $key = 'index-20'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexblog1');
    }
    public function indexblog2(){
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
            $key = 'index-21'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexblog2');
    }
    public function indexblog4(){
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
            $key = 'index-22'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexblog4');
    }
    public function indexblog5(){
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
            $key = 'index-23'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.indexblog5');
    }

    public function shop1(){
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
            $key = 'index-24'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop1');
    }
    public function shop2(){
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
            $key = 'index-25'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop2');
    }
    public function shop3(){
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
            $key = 'index-26'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop3');
    }
    public function shop4(){
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
            $key = 'index-27'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop4');
    }
    public function shop5(){
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
            $key = 'index-28'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop5');
    }
    public function shop6(){
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
            $key = 'index-29'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop6');
    }
    public function shop7(){
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
            $key = 'index-30'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop7');
    }
    public function shop8(){
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
            $key = 'index-31'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop8');
    }
    public function shop9(){
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
            $key = 'index-32'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop9');
    }
    public function shop10(){
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
            $key = 'index-33'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.shop10');
    }

    public function homestay(){
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
            $key = 'index-34'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.homestay');
    }
    public function education(){
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
            $key = 'index-35'.$count->id;
            if(!Cache::get($key)){
                $count->increment('all');
                Cache::put($key, 1, 30);
            }
        }
        return view('vinass.templates.education');
    }
}
