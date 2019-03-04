<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Count;

class CountController extends Controller
{
    public function index(){
        $count = Count::limit(7)->get();
        return response()->json(['data' => $count]);
    }
}
