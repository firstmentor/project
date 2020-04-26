@extends('layouts.master')
@section("title","Add Notes")

@section('data')
<div class="col-lg-12">
   @if(session('message'))
        <p class="alert alert-success">
            {{session('message')}}
        </p>
        @endif
    <div class="card-header">
        <h1><strong>पंचांग आधारित हस्तनिर्मित कुंडली बनवाने के लिये</strong></h1>
    </div>



<div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
    <form action="{{url('/data')}}" method="POST" enctype="multipart/form-data" class="form-horizantal">
    {{csrf_field()}}    

    <div class="col-8">
 <div class="form-group"><label for="name" class=" form-control-label">नाम </label><input type="text" id="name" class="form-control" name="name"></div>
 </div>

<div class="col-8">
 <div class="form-group"><label for="fname" class=" form-control-label">पिता का नाम</label><input type="text" id="fname"  class="form-control" name="fname"></div>
 </div>

<div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">दादा का नाम</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">माँ का नाम</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">गोत्र</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">जन्मतिथि</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">जन्मस्थान</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>


 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">जन्मसमय </label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">मोबाइल नंबर</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">पेमेंट ऑप्शन</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">गोत्र</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>
<!-- <label for="file-multiple-input" class=" form-control-label">Notes</label><br>
 <input type="file" id="file-multiple-input" name="note" multiple="" class="form-control-file">
</div> -->
<div class="col-8" style="margin-left: 6%">  
           <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> सबमिट
            </button> 
             <button type="reset" class="btn btn-danger btn-sm">
               <i class="fa fa-ban"></i> Reset
                </button>
           </div>  
<br>
           
            
           

           <div class="col-8">
           <div class="form-group"><label for="name" class=" form-control-label">नाम </label><input type="text" id="name" class="form-control" name="name"></div>
           </div>

<div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">जन्मतिथि</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">जन्मस्थान</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>


 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">जन्मसमय </label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">मोबाइल नंबर</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">पेमेंट ऑप्शन</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>

 <div class="col-8">
 <div class="form-group"><label for="dname" class=" form-control-label">गोत्र</label><input type="text" id="dname"  class="form-control" name="dname"></div>
 </div>
<!-- <label for="file-multiple-input" class=" form-control-label">Notes</label><br>
 <input type="file" id="file-multiple-input" name="note" multiple="" class="form-control-file">
</div> -->
<div class="col-8" style="margin-left: 6%">  
           <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> सबमिट
            </button> 
             <button type="reset" class="btn btn-danger btn-sm">
               <i class="fa fa-ban"></i> Reset
                </button>
           </div>  

@endsection