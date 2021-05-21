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


                                    @for($i;$i<3;$i++)
                                     <li><a href="{{$link[$i]}}">{{$tieude[$i]}}</a></li>
                                     @endfor


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="top-meta-data d-flex align-items-center justify-content-end">
                            <!-- Top Social Info -->
                            <div class="top-social-info">

                                <label class="switch">
                                    <input type="checkbox" class="js-quantityCheckBox" @if($doitheme=="1") checked @endif>
                                    <span class="slider round"></span>
                                </label>

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
                        <a href="{{URL::to('/home')}}" class="nav-brand"><img src="{{asset('frontend/logo.png')}}" alt=""></a>

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

