                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget mb-50 mt-2">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Xem nhiều</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            @foreach($show_view as $key => $view)
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <a href="{{URL::to('/detail-news/'.$view->news_slug)}}">
                                    <img src="{{asset('backend/img_title/'.$view->news_img_upload)}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{URL::to('/detail-news/'.$view->news_slug)}}" class="post-title">{{$view->news_title}}</a>
                                    <a href="{{URL::to('/detail-news/'.$view->news_slug)}}" class="post-cata cata-sm {{$view->topic_color}}">{{$view->topic_name}}</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="{{URL::to('/detail-news/'.$view->news_slug)}}"><i class="fa fa-comments-o" aria-hidden="true"></i>  {{$view->news_cmt}} lượt bình luận</a>
                                        <a href="{{URL::to('/detail-news/'.$view->news_slug)}}"><i class="fa fa-eye" aria-hidden="true"></i>  {{$view->news_view}} lượt xem</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Tin hot</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            @foreach($show_news_hot as $key => $view2)
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <a href="{{URL::to('/detail-news/'.$view2->news_slug)}}">
                                    <img src="{{asset('backend/img_title/'.$view2->news_img_upload)}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{URL::to('/detail-news/'.$view->news_slug)}}" class="post-title">{{$view2->news_title}}</a>
                                    <a href="{{URL::to('/detail-news/'.$view->news_slug)}}" class="post-cata cata-sm {{$view->topic_color}}">{{$view2->topic_name}}</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="{{URL::to('/detail-news/'.$view->news_slug)}}"><i class="fa fa-comments-o" aria-hidden="true"></i>  {{$view2->news_cmt}} lượt bình luận</a>
                                        <a href="{{URL::to('/detail-news/'.$view->news_slug)}}"><i class="fa fa-eye" aria-hidden="true"></i>  {{$view2->news_view}} lượt xem</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                                @for($i;$i<3;$i++)
                                <div class="single-blog-post d-flex">
                                    <div class="post-thumbnail">
                                        <a href="{{$link[$i]}}">
                                            <img src="{{$anh[$i]}}" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="{{$link[$i]}}" class="post-title">{{$tieude[$i]}}</a>
    {{--                                    <a href="{{$link[$i]}}" class="post-cata cata-sm {{$view->topic_color}}">{{$view2->topic_name}}</a>--}}
                                    </div>
                                </div>
                                @endfor


                        </div>




                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget mb-50">
                            <img src="{{asset('frontend/11711026631628022005.png')}}">
                        </div>

                    </div>
                </div>
