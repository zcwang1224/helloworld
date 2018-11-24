<?php

namespace Zcwang\HelloWorld;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    //
    public function index()
    {
        $message = 'Hello World!!!Hello World!!!123123test';
        return view('HelloWorld::welcome', compact('message'));    	
    }
}
