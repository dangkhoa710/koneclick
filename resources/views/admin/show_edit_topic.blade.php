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
					<a href="#">Chỉnh sửa topic</a>
				</li>
			</ul>



			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span> <b>Chỉnh thêm topic</b></h2>

					</div>

					<div class="box-content">
						@foreach($edit_topic as $key => $edit_topicc)
						<form class="form-horizontal" action="{{Url::to('/update-topic/'.$edit_topicc->topic_id)}}" method="post">
							 {{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên topic</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="topic_name"  data-provide="typeahead" data-items="4" name="topic_name"
								value="{{$edit_topicc->topic_name}}"
								>
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
								<textarea  id="editor"  name="topic_describe" >
									{{$edit_topicc->topic_describe}}
								</textarea>

							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">cập nhật topic</button>
                                <a href="{{URL::to('/list-topic')}}" class="btn">Hủy</a>
							</div>
						  </fieldset>
						</form>
						@endforeach

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
