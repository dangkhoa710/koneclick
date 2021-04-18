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
					<a href="#">Item Topic</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Thêm item topic</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span> <b>Thêm item topic</b></h2>

					</div>

					<?php
					 $message = Session::get('message');
					 if($message){
					 echo '<span class="text-alert"><h3><b>   '.$message.'</h3></b></span>';
					 Session::put('message',null);
					 }
					 ?>

					<div class="box-content">
						<form class="form-horizontal" action="{{Url::to('save-item-topic')}}" method="post">
							 {{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên item topic</label>
							  <div class="controls">
								<input required type="text" class="span6 typeahead" id="item_topic_name"  data-provide="typeahead" data-items="4" name="item_topic_name">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError">Thuộc topic</label>
								<div class="controls">
								  <select id="list_topic" name="list_topic" data-rel="chosen">
									 @foreach($show_topic as $key => $topic)
									 <option value="{{$topic->topic_id}}">{{$topic->topic_name}}</option>
									 @endforeach
								  </select>
								</div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Item topic slug</label>
							  <div class="controls">
								<input required type="text" class="span6 typeahead" id="item_topic_slug"  data-provide="typeahead" data-items="4" name="item_topic_slug">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Mô tả vắn tắt</label>
							  <div class="controls">
								<textarea id="editor"  name="item_topic_describe"></textarea>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Thêm item topic</button>
							  <a href="{{URL::to('/list-item-topic')}}" class="btn">Hủy</a>
							</div>
						  </fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
