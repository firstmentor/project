@extends('admin.layout.master')
@section("title","Add Notes")

@section('data')
<div class="col-lg-12">
   @if(session('message'))
        <p class="alert alert-success">
            {{session('message')}}
        </p>
        @endif
    <div class="card-header">
        <h1><strong>NOTES</strong></h1>
    </div>



<div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
    <form action="{{url('/addassignment')}}" method="POST" enctype="multipart/form-data" class="form-horizantal">
    {{csrf_field()}}    

    <div class="col-8">
 <div class="form-group"><label for="name" class=" form-control-label">Subject Name </label><input type="text" id="subjectname" class="form-control" name="subjectname"></div>
 </div>

<div class="col-8">
 <div class="form-group"><label for="name" class=" form-control-label">Subject Code </label><input type="text" id="subjectname" class="form-control" name="subjectcode"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="name" class=" form-control-label">Link </label><input type="text" id="subjectname" class="form-control" name="link"></div>
 </div>
 


<div class="col-8" style="margin-left: 6%">  
           <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
            </button> 
             <button type="reset" class="btn btn-danger btn-sm">
               <i class="fa fa-ban"></i> Reset
                </button>
           </div>  
<br>
           
            
           

           

@endsection