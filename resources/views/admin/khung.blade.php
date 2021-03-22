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
				<a class="brand" href="index.html"><span>K-ONE CLICK</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-bell"></i>
								<span class="badge red">
								7 </span>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-calendar"></i>
								<span class="badge red">
								5 </span>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								4 </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('public/backend/img/avatar.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('public/backend/img/avatar.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('public/backend/img/avatar.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('public/backend/img/avatar.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="{{asset('public/backend/img/avatar.jpg')}}" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						
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
 									<span> Cài đặt thông tin</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="{{URL::to('/admin-logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
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
							<a class="dropmenu" href="#"><i class="icon-arrow-down"></i><span class="hidden-tablet"> Crawl</span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/crawl-news')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Crawl dữ liệu tự động</span></a></li>
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
		<script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>	
	    <script src="{{asset('public/backend/ckfinder/ckfinder.js')}}"></script>
		<script>CKEDITOR.replace('topic_describe');</script>
		<script>CKEDITOR.replace('item_topic_describe');</script>
		<script>
			var editor = CKEDITOR.replace('news_content',{
			language : "vi",
			filebrowserImageBrowseUrl: 'public/backend/ckfinder/ckfinder.html?tpye=Images',
			filebrowserFlashBrowseUrl: 'public/backend/ckfinder/ckfinder.html?tpye=Flash',
			filebrowserImageUploadUrl: 'public/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl: 'public/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			});
		</script>




	<!-- end: JavaScript-->
	
</body>
</html>