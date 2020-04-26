@extends('admin.layout.master')

@section('data')

<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
<form action="{{url('/curd/update')}}" method="post">


<div class="col-lg-12">
  
    <center><div class="card-header" style="background-color: #3a3abc;border-radius: 40px;width: 800px;height: 40px;margin-top: 20px;">
      <h3 style="margin-top: -11px"> <center><span style="color: white">Edit Notes</span></center></h3>
    </div></center>

  


<div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
    <form action="{{url('/curds')}}" method="POST" enctype="multipart/form-data" class="form-horizantal">
    	@if(session('message'))
	<p class="alert alert-success">
		{{session('message')}}
	</p>
	@endif
    {{csrf_field()}}    
<div class="row form-group">

<input type="hidden" name="id" value="{{$curds->id}}">
<div class="col-8"><br>
<div class="form-group"><label for="Subject Name" class=" form-control-label">Subject Name</label>
  <input type="text" id="Subject Name" placeholder="Enter Subject Name" class="form-control" name="subject_name" value="{{$curds->subject_name}}"></div>
</div>

<div class="col-8">
<div class="form-group"><label for="Content " class=" form-control-label">Content</label>
  <input type="text" id="Content" placeholder="Enter Content" class="form-control" name="content" value="{{$curds->content}}"></div>
</div>

<div class="col-8">                                                   
 <div class="form-group"><label for="link" class=" form-control-label">Link</label><input type="text" id="link" placeholder="link" class="form-control" name="link" value="{{$curds->link}}"></div>
</div>





 

        <div class="col-8" style="margin-left: 6%">  
           <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
            </button> 
             <button type="reset" class="btn btn-danger btn-sm">
               <i class="fa fa-ban"></i> Reset
                </button>
           </div>  
</div> <!-- close row form -->
</form>
</div>
  </div>  
</form>
</body>
</html>

@endsection