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
					<a href="#">Chỉnh sửa item topic</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span> <b>Chỉnh sửa item topic</b></h2>

					</div>

					<?php
					 $message = Session::get('message');
					 if($message){
					 echo '<span class="text-alert"><h3><b>   '.$message.'</h3></b></span>';
					 Session::put('message',null);
					 }
					 ?>

					<div class="box-content">
						@foreach($edit_item_topic as $key => $edit_item_topicc)
						<form class="form-horizontal" action="{{Url::to('update-item-topic/'.$edit_item_topicc->item_topic_id)}}" method="post">
							 {{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên item topic</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="item_topic_name"  data-provide="typeahead" data-items="4" name="item_topic_name"
								value="{{$edit_item_topicc->item_topic_name}}">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError">Thuộc topic</label>
								<div class="controls">
								  <select id="list_topic" name="list_topic" data-rel="chosen">
									 @foreach($show_topic as $key => $topic)
									 @if($topic->topic_id==$edit_item_topicc->topic_id)
									 <option selected value="{{$topic->topic_id}}">{{$topic->topic_name}}</option>
									 @else
									 <option value="{{$topic->topic_id}}">{{$topic->topic_name}}</option>
									 @endif
									 @endforeach
								  </select>
								</div>
							  </div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Item topic slug</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="item_topic_slug"  data-provide="typeahead" data-items="4" name="item_topic_slug"
								value="{{$edit_item_topicc->item_topic_slug}}">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Màu tagname</label>
							  <div class="controls">
                                  <input type="color" name="item_topic_color" value="{{$edit_item_topicc->item_topic_color}}">
							  </div>
							</div>


							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Mô tả vắn tắt</label>
							  <div class="controls">
								<textarea name="item_topic_describe" id="editor" >
									{{$edit_item_topicc->item_topic_describe}}
								</textarea>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Cập nhật item topic</button>
                                <a href="{{URL::to('/list-item-topic')}}" class="btn">Hủy</a>
							</div>
						  </fieldset>
						</form>
						@endforeach
					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
