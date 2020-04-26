<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;
use App\Assignment;

class HomepageController extends Controller
{
    //
    public function index()
    {

    	$get=Notes::all();
        $post=Assignment::all();

    	return view('website.index',compact('get','post'));
    }
}
