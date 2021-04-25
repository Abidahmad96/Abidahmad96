@extends('admin/layout/layout')

@section('container')

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Paget</h4>
			<h2><a href="{{ url('/admin/page/add') }} ">Add Page</a></h2>
		 </div>
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		 <div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
			   <div class="x_content">
				  <div class="row">
				  	<div class="col-sm-12 flash_msg">{{session('msg')}}</div>
					 <div class="col-sm-12">
						<div class="card-box table-responsive">
						   <table id="datatable" class="table table-striped table-bordered" style="width:100%">
							  <thead>
								 <tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Slug</th>
									<th>Action</th>
								 </tr>
							  </thead>
							  <tbody>
							  	@foreach($result as $row)
								 <tr>
									<td>{{$row->id}}</td>
									<td>{{$row->name}}</td>
									<td>{{$row->slug}}</td>
									<td>
										<a href="{{url('admin/page/edit/'.$row->id)}}" class="btn btn-info">Edit</a>
										<a href="{{url('admin/page/delete/'.$row->id)}}" class="btn btn-danger">Delete</a>
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