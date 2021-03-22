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
					<a href="#">Crawl</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Danh sách news</a></li>
			</ul>
			<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon white user"></i><span class="break"></span>Crawl tự động tin tức</h2>
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
							<form  class="form-horizontal" action="#" method="post">
								{{ csrf_field() }}
								<div class="control-group">
									<label class="control-label" for="selectError">Chọn trang cần crawl </label>
									<div class="controls">
									<select id="list_topic" name="list_topic" data-rel="chosen">	 
										<option value="0" selected></option>
										<option value="1" >Chủ để 1</option>
										<option value="2" >Chủ để 2</option>
									</select>
									</div><br>
									<label class="control-label" for="selectError">Chọn chủ đề cần crawl </label>
									<div class="controls">
									<select id="list_topic2" name="list_topic" data-rel="chosen">	 
										<option value="0" selected></option>
										<option value="1" >Chủ để 1</option>
										<option value="2" >Chủ để 2</option>
									</select>
									</div>
								</div>
								<input class="btn btn-success" type="submit" name="ok" value="Bắt đầu cào">
							</form>
						</div>
							<table class="table table-striped table-bordered bootstrap-datatable datatable" width="550">
							  <thead>
								  <tr>
									  <th>Tiêu đề tin</th>
									  <th>Nội dung</th>
									  <th>Slug</th>
									  <th>Ảnh lớn</th>
									  <th>Thuộc item topic</th>
									  <th>Thêm vào tin tức</th>
								  </tr>
							  </thead>   
							  <tbody>
							  	
							  	@foreach($element as $key => $c)
								<tr>
									<td class="center"><b>{{$c->plaintext}}</b></td>
									<td class="center seo_content">@foreach($element2 as $key => $c2)
										{{$c2}}
										@endforeach
									</td>
									<td class="center">abc</td>
									<td class="center">
										<img height="100" width="100">
									</td>
									<td class="center">Thể thao</td>
									<td class="center"><input type="checkbox" name="vehicle1" value="co"></td>
								</tr>
								@endforeach
								
							  </tbody>
						    </table>
					    </div><!--/span-->
				    </div>
@endsection