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
					<a href="#">Topic</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Thêm topic</a>
				</li>
			</ul>

			 
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span> <b>Thêm topic</b></h2>
						
					</div>

					<?php
			 $message = Session::get('message');
			 if($message){
			 echo '<span class="text-alert"><h3><b>   '.$message.'</h3></b></span>';
			 Session::put('message',null);
			 }
			 ?>

					<div class="box-content">
						<form class="form-horizontal" action="{{Url::to('save-topic')}}" method="post">
							 {{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên topic</label>
							  <div class="controls">
								<input required type="text" class="span6 typeahead" id="topic_name"  data-provide="typeahead" data-items="4" name="topic_name">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Mô tả vắn tắt</label>
							  <div class="controls">
								<textarea required  id="topic_describe" name="topic_describe" ></textarea>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Thêm topic</button>
							  <button type="reset" class="btn">Hủy</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection