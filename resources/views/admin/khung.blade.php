<!DOCTYPE html>
<html lang="vi">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Trang quản trị Kone</title>
	<meta name="description" content="">
	<meta name="author" content="Dang Khoa">
	<meta name="keyword" content="Trang quản trị Kone">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('public/backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>
		<link id="ie-style" href="{{asset('public/backend/css/ie.css')}}" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="{{asset('public/backend/css/ie9.css')}}" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('public/backend/img/favicon.ico')}}">
	<!-- end: Favicon -->



<style type="text/css">
.seo_content{
    text-overflow: ellipsis;
    overflow: hidden;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    }
</style>
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{URL::TO('/dashboard')}}"><span>K-ONE CLICK</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>
								 <?php
			                        $name = Session::get('admin_name');
			                        if($name){
			                        echo $name;
			                        }
		                        ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span> Thông tin</span>
								</li>
								<li><a href="{{URL::to('/admin-logout')}}"><i class="halflings-icon off"></i>Đăng xuất</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('/dashboard')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Topic</span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/add-topic')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Thêm topic</span></a></li>
								<li><a class="submenu" href="{{URL::to('/list-topic')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách topic</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Item topic</span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/add-item-topic')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Thêm item topic</span></a></li>
								<li><a class="submenu" href="{{URL::to('/list-item-topic')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách item topic</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Tin tức</span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/add-news')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Thêm tin tức</span></a></li>
								<li><a class="submenu" href="{{URL::to('/list-news')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách tin tức</span></a></li>
							</ul>
						</li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet">Tài khoản</span></a>
                            <ul>
                                <li><a class="submenu" href="{{URL::to('/list-account')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách tài khoản</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet">Crawl data</span></a>
                            <ul>
                                <li><a class="submenu" href="{{URL::to('/list-crawl')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Thiết lập</span></a></li>
                            </ul>
                        </li>
						<li><a href="{{URL::to('/home')}}"><i class="icon-lock"></i><span class="hidden-tablet">Vào trang K-one</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">

				@yield('content')

	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="{{asset('public/backend/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('public/backend/js/jquery-migrate-1.0.0.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.ui.touch-punch.js')}}"></script>

		<script src="{{asset('public/backend/js/modernizr.js')}}"></script>

		<script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.cookie.js')}}"></script>

		<script src="{{asset('public/backend/js/fullcalendar.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('public/backend/js/excanvas.js')}}"></script>
	<script src="{{asset('public/backend/js/jquery.flot.js')}}"></script>
	<script src="{{asset('public/backend/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('public/backend/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('public/backend/js/jquery.flot.resize.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.chosen.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.uniform.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.cleditor.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.noty.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.elfinder.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.raty.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.iphone.toggle.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.uploadify-3.1.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.gritter.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.imagesloaded.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.masonry.min.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.knob.modified.js')}}"></script>

		<script src="{{asset('public/backend/js/jquery.sparkline.min.js')}}"></script>

		<script src="{{asset('public/backend/js/counter.js')}}"></script>

		<script src="{{asset('public/backend/js/retina.js')}}"></script>

		<script src="{{asset('public/backend/js/custom.js')}}"></script>


        <script src="{{asset('public/backend/ckeditor5/ckeditor.js')}}"></script>
        <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor') )
                .catch( error => {
                    console.error( error );
                } );
        </script>

        <script type="text/javascript">
            $('.js-quantityCheckBox').on('click', function (e) {
                let mode = $(this).prop("checked") == true ? 1 : 0;
                $.ajax({
                    url: '{{ route('index-show-item-topic') }}',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        item_topic_id : $(this).data('id'),
                        tt: mode,

                    },
                    success: function (res) {
                        alert('success');
                    },
                    error: function (err) {
                        alert('success');
                    }
                });

            });
            $('.js-quantityCheckBox2').on('click', function (e) {
                let mode = $(this).prop("checked") == true ? 1 : 0;
                $.ajax({
                    url: '{{ route('index-show-news') }}',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id : $(this).data('id'),
                        tt: mode,

                    },
                    success: function (res) {
                        alert('success');
                    },
                    error: function (err) {
                        alert('success');
                    }
                });

            });
            $('.js-quantityCheckBox3').on('click', function (e) {
                if ($(this).is(':checked')) {
                    $('#amount_crawl').show();
                    $('#mc_crawl').show();
                }else{
                    $('#amount_crawl').hide();
                    $('#mc_crawl').hide();
                };
                let mode = $(this).prop("checked") == true ? 1 : 0;
                $.ajax({
                    url: '{{ route('crawl-yn') }}',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        tt: mode,
                    },
                    success: function (res) {
                    },
                    error: function (err) {
                    }
                });

            });
            $('.js-quantityCheckBox4').on('click', function (e) {
                let mode = $(this).prop("checked") == true ? 1 : 0;
                $.ajax({
                    url: '{{ route('mc-crawl') }}',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        tt: mode,
                    },
                    success: function (res) {
                    },
                    error: function (err) {
                    }
                });
            });
            function doislmautin(){
                let mode = $('.amount').val();
                $.ajax({
                    url: '{{ route('amount-crawl') }}',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        tt: mode,
                    },
                    success: function (res) {
                    },
                    error: function (err) {
                    }
                });
            };
        </script>
	<!-- end: JavaScript-->

</body>
</html>
