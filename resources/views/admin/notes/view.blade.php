@extends('admin.layout.master')
@section("title","View")



@section('data')
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
@if(session('message'))
        <p class="alert alert-success">
            {{session('message')}}
        </p>
        @endif
    <center><div class="card-header" style="background-color: #3a3abc;border-radius: 40px;width: 800px;height: 40px;margin-top: 20px;">
      <h3 style="margin-top: -11px"> <center><span style="color: white">All Notes</span></center></h3>
    </div></center>
    
                            </div>
<div class="card-body">
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
    <tr>
        <th>Subject Name</th>
        <th>Content</th>
        <th>Link</th>
        <th>Action</th>
                                            

   </tr>
  @foreach($datas as $data)
<tr>
	<td>{{$data->subject_name}}</td>
	<td>{{$data->content}}</td>
    <td>{{$data->link}}</td>
	
    <td>
<!--         <a href="{{url('/curd/show/' .$data->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
        <a href="{{url('/curd/edit/' .$data->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <a href="{{url('/curd/delete/' .$data->id)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
    </td>


</tr>
@endforeach
	


                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    

@endsection
