<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class AdminController extends Controller
{
	public function login()
	{
      return view('admin.loginadmin');
	}

    public function master()
    {
    	return view('admin.layout.master');
    }

    public function loginadmin(Request $request)
    {
        if($request->isMethod('post'))
        {

            $data=$request->input();

            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>1])){

                    return redirect('/master');
            }
            else{

                return redirect()->back();
            }
        }



    }   

}
