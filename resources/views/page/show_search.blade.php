@extends('layout')
@section('content')
					<br>

                    <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                        <!-- Catagory -->
                        <div class="archive-catagory">
                            <h4><i class="fa fa-music" aria-hidden="true"></i> Kết quả tìm kiếm....</h4>
                        </div>

                    </div>

                    <!-- Single Post Area -->
                    @foreach($show_news_of_item_topic as $key => $news_of_item)
                    <div class="single-post-area style-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <a href="{{URL::to('/detail-news/'.$news_of_item->news_slug)}}">
                                    <img src="{{asset('backend/img_title/'.$news_of_item->news_img_upload)}}" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <!-- Post Content -->
                                <div class="post-content mt-0">
                                    <a href="#" class="post-cata cata-sm {{$news_of_item->topic_color}}">{{$news_of_item->topic_name}}</a>
                                    <a href="{{URL::to('/detail-news/'.$news_of_item->news_slug)}}" class="post-title mb-2 ">{{$news_of_item->news_title}}</a>
                                    <div class="post-meta d-flex align-items-center mb-2">
                                        <a href="#" class="post-author">By KB</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="{{URL::to('/detail-news/'.$news_of_item->news_slug)}}" class="post-date">{{$news_of_item->created_at}}</a>
                                    </div>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> {{$news_of_item->news_cmt}} </a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{$news_of_item->news_view}} </a>
                                    </div>

                                    <div class="seo_content"><a href="{{URL::to('/detail-news/'.$news_of_item->news_slug)}}" class="mb-2">{!!$news_of_item->news_content!!}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <nav class="mt-50">
                        <ul class="pagination justify-content-center">
                <!--                             <li class="page-item"><a class="page-link" href="?page={{$trang=1}}"><i class="fa fa-angle-left"></i></a></li> -->
                <!--                            <li class="page-item"><a class="page-link" href="?page={{$trang=1}}"><i class="fa fa-angle-right"></i></a></li> -->
                <!--                             <li class="page-item"><a class="page-link" href="?page={{$trang=1}}"></i>{{$trang=1}}</a></li> -->


                <!-- <li class="page-item"><a class="page-link" href="?page={{$trang=$trang}}"></i>{{$trang}}</a></li>
                -->


                <!--                            <li class="page-item"><a class="page-link" href="?page={{$trang=$trang+1}}"><i class="fa fa-angle-right"></i></a></li> -->
                        </ul>
                    </nav>

@endsection
