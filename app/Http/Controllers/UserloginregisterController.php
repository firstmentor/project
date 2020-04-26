<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class UserloginregisterController extends Controller
{
    //
    public function register(Request $request)
    {

    	if($request->isMethod('post')){

    		$data=$request->all();

    		$user=new User;

    		$user->name=$data['name'];
    		$user->email=$data['email'];
    		$user->password=sha1($data['password']);
            $user->admin = 2; 

			$user->save();

			// if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            if($user){
				return redirect('/index');
			}    		
        

    	}

    	return view('website.register');

    }

   public function login(Request $request)
    {

        if($request->isMethod('post'))
        {
           
            $data=$request->input();

            $type=0;
            $type = User::select('admin')->where('email','=', $data['email'])->where('password','=', sha1($data['password']))->get();
            

            if($type[0]->admin ==1)
            {

                    return redirect('master');
            }
            else if($type[0]->admin ==2)
            {

                return redirect('/index');

            }

            else
            {
                return view('website.login');
            }

        }
         return view('website.login');

    }   

    public function logout(){

        Session::flush();

        return redirect('/loginUser');
    }
}
