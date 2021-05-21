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
					<a href="#">Tin tức</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Danh sách tin tức</a></li>
			</ul>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Danh sách news</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>

					<?php
			 $message = Session::get('message');
			 if($message){
			 echo '<span class="text-alert"><h3><b> '.$message.'</h3></b></span>';
			 Session::put('message',null);
			 }
			 ?>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" width="550">
						  <thead>
							  <tr>
								  <th>Mã ID</th>
								  <th>Tiêu đề tin </th>
								  <th>Nội dung</th>
								  <th>Số lượt xem</th>
								  <th>Số lượt like</th>
								  <th>Số lượt cmt</th>
								  <th>Slug</th>
								  <th>Ảnh lớn</th>
								  <th>Thuộc topic</th>
								  <th>Thuộc item topic</th>
								  <th>Trang chủ (Hot)</th>
								  <th></th>
							  </tr>
						  </thead>
						  <tbody>
						  	@foreach($show_list_news as $key => $list_news)
							<tr>
								<td>{{ $list_news-> news_id }}</td>
								<td class="center">{{ $list_news->news_title }}</td>
								<td class="center seo_content" style="width: 400px">{!!$list_news->news_content!!}</td>
								<td class="center">{{ $list_news->news_view }}</td>
								<td class="center">{{ $list_news->news_like }}</td>
								<td class="center">{{ $list_news->news_cmt }}</td>
								<td class="center">{{ $list_news->news_slug }}</td>
								<td class="center">
									<img src="public/backend/img_title/{{$list_news->news_img_upload}}" height="100" width="100">
								</td>
								<td class="center">{{ $list_news->topic_name }}</td>
								<td class="center">{{ $list_news->item_topic_name }}</td>
{{--								@if($list_news->news_index==1)--}}
{{--								<td class="center">--}}
{{--									<a href="{{URL::to('/index-hidden-news/'.$list_news->news_id)}}" class="btn btn-success">Ẩn</a>--}}
{{--								</td>--}}
{{--								@else--}}
{{--								<td class="center">--}}
{{--									<a href="{{URL::to('/index-show-news/'.$list_news->news_id)}}" class="btn btn-primary">Hiện</a>--}}
{{--								</td>--}}
{{--								@endif--}}
                                <td>
                                    <input type="checkbox" class="js-quantityCheckBox2" data-id="{{$list_news-> news_id}}"  @if($list_news->news_index==1) checked @endif >
                                </td>
								<td class="center">
									<a class="btn btn-info" href="{{URL::to('/edit-news/'.$list_news->news_id)}}">
										<i class="halflings-icon white edit"></i>
									</a>
									<a onclick="return confirm('Bạn có chắc là muốn xóa tin này ko ?')" class="btn btn-danger" href="{{URL::to('/del-news/'.$list_news->news_id)}}">
										<i class="halflings-icon white trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						  </tbody>
					  </table>
				</div><!--/span-->
			</div>
@endsection
