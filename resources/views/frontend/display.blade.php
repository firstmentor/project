@extends('layouts.master')
@section("title","Add Cretificate")

@if(session('message'))
        <p class="alert alert-success">
            {{session('message')}}
        </p>
        @endif

@section('data')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

    <center><div class="card-header" style="background-color: #3a3abc;border-radius: 40px;width: 800px;height: 40px;margin-top: 20px;">
      <h3 style="margin-top: -11px"> <center><span style="color: white">All Student Data</span></center></h3>
    </div></center>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
 <tr>
        
        <th>Sem</th>
        <th>Subject</th>
        <th>Subject code</th>
        <th>Notes</th>
        <th>Action</th>
 </tr>
 @foreach($data as $datas)
 <tr>

    
    <td>{{$datas->sem}}</td>
    <td>{{$datas->subject}}</td>
	<td>{{$datas->subjectcode}}</td>
    <td>{{$datas->Notes}}</td>

	<td>
     <button class="btn btn-primary"><a href="{{url('/curd/cretificate/' .$data->id)}}" style="color:black;">Add Certificate</a></button> 
    </td>
    
</tr>
@endforeach
 </thead>

        </table>                              
                                    
                    </div>
                    </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection   