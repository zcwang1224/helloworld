<?php

namespace Zcwang\HelloWorld;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    //
    public function index()
    {
        $message = 'Hello haha';
        // dd(trans('helloname::hello.name'));
        return view('HelloWorld::welcome', compact('message'));    	
    }
}
