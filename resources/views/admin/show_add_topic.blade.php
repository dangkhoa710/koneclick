@extends('admin.khung')
@section('content')
<div style="height: 100vh!important;">
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
			 echo '<span class="text-alert"><h3><b>'.$message.'</h3></b></span>';
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

                              <div class="control-group">
                                  <label class="control-label" for="selectError">Màu topic</label>
                                  <div class="controls">
                                      <select name="topic_color" data-rel="chosen">
                                          <option value="primary">bg-primary</option>
                                          <option value="secondary">bg-secondary</option>
                                          <option value="success">bg-success</option>
                                          <option value="danger">bg-danger</option>
                                          <option value="warning">bg-warning</option>
                                          <option value="info">bg-info</option>
                                          <option value="light">bg-light</option>
                                          <option value="dark">bg-dark</option>
                                          <option value="white">bg-white</option>
                                          <option value="transparent">bg-transparent</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="control-group hidden-phone">
                                  <label class="control-label" for="textarea2">Mô tả vắn tắt</label>
                                  <div class="controls">
                                      <textarea id="editor"  name="topic_describe"></textarea>
                                  </div>
                              </div>

							<div class="form-actions">
                                <button type="submit" class="btn btn-primary">Thêm topic</button>
                                <a href="{{URL::to('/list-topic')}}" class="btn">Hủy</a>
							</div>
						  </fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->
</div>
@endsection
