@extends('admin.khung')
@section('content')
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-tasks"></i>
					<a href="#">Topic</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Danh sách topic</a></li>
			</ul>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Danh sách topic</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
										<?php
			 $message = Session::get('message');
			 if($message){
			 echo '<span class="text-alert"><h3><b>   '.$message.'</h3></b></span>';
			 Session::put('message',null);
			 }
			 ?>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Mã ID</th>
								  <th>Tên topic</th>
								  <th>Mô tả</th>
								  <th>Số lượng item</th>
								  <th></th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($show_list_topic as $key => $list_topic)
							<tr>
								<td>{{ $list_topic->topic_id }}</td>
								<td class="center">{{ $list_topic->topic_name }}</td>
								<td class="center">{!!$list_topic->topic_describe!!}</td>
								<td class="center">{{ $list_topic->topic_amount }}</td>
								<td class="center">
									<a class="btn btn-info" href="{{URL::to('/edit-topic/'.$list_topic->topic_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a onclick="return confirm('Bạn có chắc là muốn xóa topic này ko ?')" class="btn btn-danger" href="{{URL::to('/del-topic/'.$list_topic->topic_id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							@endforeach
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			</div>
@endsection