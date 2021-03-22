<header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <!-- Breaking News Widget -->
                        <div class="breaking-news-area d-flex align-items-center">
                            <div class="news-title">
                                <p>Tin nóng:</p>
                            </div>
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                     @foreach($show_news_hot as $key => $hott)
                                    <li><a href="{{URL::to('/detail-news/'.$hott->news_slug)}}">{{$hott->news_title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="top-meta-data d-flex align-items-center justify-content-end">
                            <!-- Top Social Info -->
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="{{URL::to('/search')}}" method="post">  {{ csrf_field() }}
                                    <input type="search" name="search" id="search" placeholder="Tìm kiếm tin...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <?php
                            $user_id = Session::get('user_id');
                            $user_name = Session::get('user_name')?>

                            @if(!isset($user_id)) 
                            <a href="{{URL::to('/show-login')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="vizew-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">

                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="vizewNav">

                        <!-- Nav brand -->
                        <a href="{{URL::to('/home')}}" class="nav-brand"><img src="{{asset('public/frontend/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{URL::to('/home')}}">Trang chủ</a></li>
                                    @foreach($show_topic_index as $key => $topic_index)
                                    <li><a href="#">{{$topic_index -> topic_name}}</a>
                                        <ul class="dropdown">
                                            @foreach($show_item_topic_index as $key => $item_topic_index)
                                            @if($item_topic_index->topic_id==$topic_index->topic_id)
                                            <li><a href="{{URL::to('/show-list-item-topic-index/'.$item_topic_index->item_topic_slug)}}">{{$item_topic_index -> item_topic_name}}</a></li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                    <!-- <li><a href="#">Công nghệ</a>
                                    <ul class="dropdown">
                                            <li><a href="{{URL::to('/show-topic')}}">Photograph</a></li>
                                            <li><a href="{{URL::to('/show-topic')}}">Photoshop</a></li>
                                            <li><a href="{{URL::to('/show-topic')}}">Lập trình web</a></li>
                                            <li><a href="{{URL::to('/show-topic')}}">Video and edit</a></li>
                                       
                                    </li> -->
                                    <li><a href="{{URL::to('/contact')}}">Liên hệ</a></li>
                                    @if(isset($user_id))
                                        <li><a href="#">{{$user_name}}</a>
                                             <ul class="dropdown">
                                                <li><a href="#">Thông tin tài khoản</a></li>
                                                <li><a href="{{URL::to('/user-logout')}}">Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>