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
    <form action="{{url('/addnotes')}}" method="POST" enctype="multipart/form-data" class="form-horizantal">
    {{csrf_field()}}    

    <div class="col-8">
 <div class="form-group"><label for="name" class=" form-control-label">subject name </label><input type="text" id="subjectname" class="form-control" name="subject_name"></div>
 </div>

<div class="col-8">
 <div class="form-group"><label for="fname" class=" form-control-label">content</label>

  <textarea name="content" rows="10" cols="80"></textarea>

 </div>
 </div>

<div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">link</label>
  <input type="text" name="link" class="form-control"><br>

  

  
 
</div>
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