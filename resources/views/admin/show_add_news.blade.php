@extends('admin.khung')
@section('content')
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Trang chính</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-tasks"></i>
					<a href="#">Tin tức</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Thêm tin tức</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span> <b>Thêm tin</b></h2>

					</div>
					<?php
			 $message = Session::get('message');
			 if($message){
			 echo '<span class="text-alert"><h3><b>   '.$message.'</h3></b></span>';
			 Session::put('message',null);
			 }
			 ?>
					<div class="box-content">
						<form class="form-horizontal" action="{{Url::to('save-news')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tiêu đề tin </label>
							  <div class="controls">
								<input required type="text" class="span6 typeahead" id="news_title"  data-provide="typeahead" data-items="4" name="news_title">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Ảnh tin</label>
							  <div class="controls">
								<input required class="input-file uniform_on" id="news_upimg" type="file" name="news_upimg">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label">Trang chủ</label>
								<div class="controls">
								  	<select name="news_index" id="news_index" data-rel="chosen">
								  		<option value="1">Hiện</option>
								  		<option value="0">Ẩn</option>
								  	</select>
								</div>
							  </div>

							 <div class="control-group">
								<label class="control-label" for="selectError">Thuộc topic</label>
								<div class="controls">
								  <select id="list_topic" name="list_topic" data-rel="chosen">
									 <option value=""></option>
									 @foreach($show_topic as $key => $topic)
									 <option value="{{$topic->topic_id}}">{{$topic->topic_name}}</option>
									 @endforeach
								  </select>
								</div>
							  </div>

							 <div class="control-group">
								<label class="control-label" for="selectError">Thuộc item topic</label>
								<div class="controls">
								  <select id="list_item_topic" name="list_item_topic" data-rel="chosen">
								  	<option value=""></option>
									 @foreach($show_item_topic as $key => $item_topic)
									 <option value="{{$item_topic->item_topic_id}}"
									 >{{$item_topic->item_topic_name}}</option>
									 @endforeach
								  </select>
								</div>
							  </div>

							  <div class="control-group">
							  <label class="control-label" for="typeahead"> Slug </label>
							  <div class="controls">
								<input required type="text" class="span6 typeahead" id="news_slug"  data-provide="typeahead" data-items="4" name="news_slug">
							  </div>
							  <div class="controls">
								( * không kèm các kí tự đặc biệt như : /,?,@,&,....)
							  </div>

							</div>

                          <div class="control-group hidden-phone">
                              <label class="control-label" for="textarea2">Nội dung</label>
                              <div class="controls">
                                  <textarea id="editor"  name="news_content"></textarea>
                              </div>
                          </div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"></label>
							  <div class="controls">
								<div class="box-header">
								<h2>Quy chuẩn đăng bài</h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								</div>
								</div>
								<div class="box-content">
									Định dạng : Bình thường<br>
									Phông: Mặc định <br>
									Cỡ chữ : 16<br>.
								</div>
							  </div>
							</div>
							<br>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Đăng tin</button>
                                <a href="{{URL::to('/list-news')}}" class="btn">Hủy</a>
							</div>
						  </fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
