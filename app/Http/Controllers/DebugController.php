<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DebugController extends Controller
{
    public function test(){
        dd(Auth::user());
    }
    public function test2(){
        dd(Auth::hasRole("admin"));
    }
    public function test3(){
        dd(Auth::hasRole("tamer"));
    }
}
