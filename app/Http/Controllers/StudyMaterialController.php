<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyMaterial;
use App\user;
use Auth;
use DB;

class StudyMaterialController extends Controller
{
    public function master()
	{
		return view('layouts.master');
	}

	public function addnote()
	{
				
		return view('frontend.note');
	} 
	 public function save(Request $request)
    {
    	 $file=$request->file('note');
        $filename='note'.time().'.'.$request->note->extension();
        $destination=storage_path('../public/upload');
        $file->move($destination,$filename);
        $path="/".$filename;

        $data=new StudyMaterial;
        $data->sem =$request->sem;
        $data->subject =$request->subject;
        $data->subjectcode =$request->subjectcode;
        $data->note = $path;

        
    	$data->save();
        return redirect()->back();
    	

    
    }


    public function os()
    {

        return view('website.notes.os');
    }

    public function se()
    {

        return view('website.notes.se');
    }

    public function ds()
    {

        return view('website.notes.ds');
    }
}

