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
					<a href="#">Item Topic</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Danh sách item topic</a></li>
			</ul>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Danh sách item topic</h2>
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
								  <th>Tên item topic</th>
								  <th>Mô tả</th>
								  <th>Thuộc topic</th>
								  <th>Slug</th>
                                  <th>Màu tag-name </th>
								  <th>Số lượng bài viết</th>
								  <th>Trang chủ</th>
                                  <th>Tạo lúc</th>
                                  <th>Sửa lần cuối lúc</th>
								  <th></th>
							  </tr>
						  </thead>
						  <tbody>
						  	@foreach($show_list_item_topic as $key => $list_item_topic)
							<tr>
								<td>{{ $list_item_topic->item_topic_id }}</td>
								<td class="center">{{ $list_item_topic->item_topic_name }}</td>
								<td class="center">{!!$list_item_topic->item_topic_describe!!}</td>
								<td class="center">{{ $list_item_topic->topic_name }}</td>
								<td class="center">{{ $list_item_topic->item_topic_slug }}</td>
                                <td class="center" style="background-color:{{$list_item_topic->item_topic_color ?? '' }}"></td>
								<td class="center">{{ $list_item_topic->item_topic_amount }}</td>

{{--								@if($list_item_topic->item_topic_index==1)--}}
{{--								<td class="center">--}}
{{--									<a href="{{URL::to('/index-hidden-item-topic/'.$list_item_topic->item_topic_id)}}" class="btn btn-success">Ẩn</a>--}}
{{--								</td>--}}
{{--								@else--}}
{{--								<td class="center">--}}
{{--									<a href="{{URL::to('/index-show-item-topic/'.$list_item_topic->item_topic_id)}}" class="btn btn-primary">Hiện</a>--}}
{{--								</td>--}}
{{--								@endif--}}

                                <td>
                                    <input type="checkbox" class="js-quantityCheckBox" data-id="{{$list_item_topic->item_topic_id}}"  @if($list_item_topic->item_topic_index=="1") checked @endif >
                                </td>
                                <td class="center">{{$list_item_topic->item_topic_created_at}}</td>
                                <td class="center">{{$list_item_topic->item_topic_updated_at}}</td>
								<td class="center">
									<a class="btn btn-info" href="{{URL::to('/edit-item-topic/'.$list_item_topic->item_topic_id)}}">
										<i class="halflings-icon white edit"></i>
									</a>
									<a onclick="return confirm('Bạn có chắc là muốn xóa item topic này ko ?')" class="btn btn-danger" href="{{URL::to('/del-item-topic/'.$list_item_topic->item_topic_id)}}">
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
