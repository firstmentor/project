<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;

class AssignmentController extends Controller
{
     public function addassignment(Request $request)
    {


        if($request->isMethod('post')){

            $data=new Assignment;
        
        $data->subjectname=$request->subjectname;
        $data->subjectcode=$request->subjectcode;
        $data->link=$request->link;

        

        $data->save();

        return redirect()->back();
        }


        return view('admin.assignment.addassignment');
    }


  public function viewassignment()
    {
        $datas =Assignment::all();
        //echo "string";
        // print_r($datas);
        return view ('admin.assignment.viewassignment',compact('datas'));
    }

   
// // public function show($id)
// //     {
// //         $datas=Notes::find($id);
// //         //print_r($curds);
// //      return view ('admin.notes.view',compact('datas'));    }


    public function editassignment($id)
    {
        $curds=Assignment::find($id);
        return view('admin.assignment.editassignment',compact('curds'));
    }
public function updateassignment(Request $request)
    {

        $curd =Assignment::find($request->id);
        $curd->subjectname =$request->subjectname;
        $curd->subjectcode =$request->subjectcode;
        $curd->link =$request->link;
       
        $updated=$curd->update();

     
        if($updated)
        {
            return redirect('/viewassignment')->with('message','edit successfully update!');
        }
    }
    

     public function deleteassignment($id)
    {
        $post =Assignment::find($id);
        $deleted =$post->delete();
        if($deleted)
        {
            return redirect('/viewassignment')->with('message','post successfully delete!');
        }
    }


}
