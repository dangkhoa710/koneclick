@extends('layout')
@section('content')

                    <div class="all-posts-area">
                        <!-- Section Heading -->
                        <br>
                        <div class="section-heading style-2">
                            <h4>Mới nhất</h4>
                            <div class="line"></div>
                        </div>
                        
                        <!-- Single Post Area -->
                        @foreach($show_news_hot as $key => $hot)
                        <div class="single-post-area mb-30">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->

                                    <div class="post-thumbnail">
                                        <a href="{{URL::to('/detail-news/'.$hot->news_slug)}}" class="post-date">
                                        <img src="{{asset('public/backend/img_title/'.$hot->news_img_upload)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="#" class="post-cata cata-sm {{$hot->topic_color}}">
                                            {{$hot->topic_name}}</a>
                                        <a href="{{URL::to('/detail-news/'.$hot->news_slug)}}"class="post-title mb-2">{{$hot->news_title}}</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By KB-e</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="{{URL::to('/detail-news/'.$hot->news_slug)}}" class="post-date">{{$hot->created_at}}</a>
                                        </div>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> {{$hot->news_cmt}} </a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{$hot->news_view}} </a>
                                        </div>
                                        <div class="seo_content">
                                        <p class="mb-2">{!!$hot->news_content!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <!-- Section Heading -->
                                @foreach ($show_item_topic_hot as $itemtopic)

                                <div class="section-heading style-2">
                                    <h4>{{$itemtopic->item_topic_name}}</h4>
                                    <div class="line"></div>
                                </div>

                                <!-- Sports Video Slides -->
                                <div class="sport-video-slides owl-carousel mb-50">
                                    @foreach ($show_news_item as $niu)
                                    @if($niu->item_topic_id==$itemtopic->item_topic_id)
                                    <div class="single-feature-post video-post bg-img" style="background-image: url(public/backend/img_title/{{$niu->news_img_upload}});">

                                <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-cata {{$niu->topic_color}}">{{$niu->topic_name}}</a>
                                        <a href="{{URL::to('/detail-news/'.$niu->news_slug)}}" class="post-title">{{$niu->news_title}}</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>  {{$niu->news_cmt}} lượt bình luận</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{$niu->news_view}} lượt xem</a>
                                            <a href="#">{{$niu->created_at}}</a>
                                        </div>
                                    </div>

                                    </div>

                                    <!-- Single Blog Post -->
                                    @endif
                                    @endforeach
                                </div>
                                @foreach ($show_news_item as $niu)
                                @if($niu->item_topic_id==$itemtopic->item_topic_id)
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <a href="{{URL::to('/detail-news/'.$niu->news_slug)}}">
                                        <img src="{{asset('public/backend/img_title/'.$niu->news_img_upload)}}" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="{{URL::to('/detail-news/'.$niu->news_slug)}}" class="post-title">{{$niu->news_title}}</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>  {{$niu->news_cmt}} lượt bình luận</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{$niu->news_view}} lượt xem</a>
                                            <a href="#">{{$niu->created_at}}</a>
                                        </div>
                                    </div>
                                </div>

                                @endif
                                @endforeach
                                @endforeach

                            </div>


                        </div>

                        <!-- Section Heading -->
                    </div>
@endsection