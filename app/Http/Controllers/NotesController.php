<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;

class NotesController extends Controller
{
    public function addnotes(Request $request)
    {

        

    	if($request->isMethod('post')){

    		$data=new Notes;

    	$data->subject_name=$request->subject_name;
    	$data->content=$request->content;
    	$data->link=$request->link;
        
    	$data->save();

    	return redirect()->back();
    	}


    	return view('admin.notes.addnotes');
    }


  public function view()
    {
    	$datas =Notes::all();
        //echo "string";
    	// print_r($datas);
    	return view ('admin.notes.view',compact('datas'));
    }

   
// public function show($id)
//     {
//         $datas=Notes::find($id);
//         //print_r($curds);
//     	return view ('admin.notes.view',compact('datas'));    }


    public function edit($id)
    {
        $curds=Notes::find($id);
        return view('admin.notes.edit',compact('curds'));
    }
public function update(Request $request)
    {

        $curd =Notes::find($request->id);
        $curd->subject_name =$request->subject_name;
        $curd->content =$request->content;
        $curd->link =$request->link;
       
        $updated=$curd->update();

     
        if($updated)
        {
            return redirect('/view')->with('message','edit successfully update!');
        }
    }
    

     public function delete($id)
    {
        $post =Notes::find($id);
        $deleted =$post->delete();
        if($deleted)
        {
            return redirect('/view')->with('message','post successfully delete!');
        }
    }



}
