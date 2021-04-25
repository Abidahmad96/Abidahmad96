@extends('admin/layout/layout')

@section('container')

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Post</h4>
			<h2><a href="/admin/post/add">Add Post</a></h2>
		 </div>
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		 <div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
			   <div class="x_content">
				  <div class="row">
				  	<div class="col-sm-12" class="flash_msg">{{session('msg')}}</div>
					 <div class="col-sm-12">
						<div class="card-box table-responsive">
						   <table id="datatable" class="table table-striped table-bordered" style="width:100%">
							  <thead>
								 <tr>
									<th>S.No</th>
									<th>Title</th>
									<th>Short Desc</th>
									<th>Image</th>
									<th>Post Date</th>
									<th>Action</th>
								 </tr>
							  </thead>
							  <tbody>
							  	@foreach($result as $row)
								 <tr>
									<td>{{$row->id}}</td>
									<td>{{$row->title}}</td>
									<td>{{$row->short_desc}}</td>
									<td><img src="{{ asset('storage/post/'.$row->image)}}" width="100px" /></td>
									<td>{{$row->post_date}}</td>
									<td>
										<a href="{{url('admin/post/edit/'.$row->id)}}" class="btn btn-info">Edit</a>
										<a href="{{url('admin/post/delete/'.$row->id)}}" class="btn btn-danger">Delete</a>
									</td>
								 </tr>
								 @endforeach
							  </tbody>
						   </table>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
@endsection