@extends('layout')
@section('content')
@foreach($news_detail as $key => $value)
                                <?php
                                 $user_id = Session::get('user_id');
                                  $user_name = Session::get('user_name')?>
<br>
<div class="post-details-content">
                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0 ">
                                <a href="#" class="{{$value->topic_color}}">{{$value->topic_name}}</a>
                                <a href="#" class=" post-cata" style="background-color: {{$value->item_topic_color}}">{{$value->item_topic_name}}</a>
                                <a href="single-post.html" class="post-title mb-2">{{$value->news_title}}</a>

                            </div>

                            <div>
                                {!!$value->news_content!!}
                            </div>

                            <!-- Post Tags -->

                            <!-- Post Author -->

                            <!-- Related Post Area -->
                            <div class="related-post-area mt-5">
                                <!-- Section Title -->
                                <div class="section-heading style-2">
                                    <h4>Tin liên quan</h4>
                                    <div class="line"></div>
                                </div>

                                <div class="row">

                                    <!-- Single Blog Post -->
                                    <div class="col-12 col-md-6">
                                        @foreach($relate as $key => $lq)
                                        <div class="single-post-area mb-50">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{asset('public/backend/img_title/'.$lq->news_img_upload)}}" alt="">
                                            </div>

                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="{{URL::to('/detail-news/'.$lq->news_slug)}}" class="{{$lq->topic_color}}">{{$lq->topic_name}}</a>
                                                <a href="{{URL::to('/detail-news/'.$lq->news_slug)}}" class=" post-cata" style="background-color: {{$lq->item_topic_color}}">{{$lq->item_topic_name}}</a>
                                                <a href="{{URL::to('/detail-news/'.$lq->news_slug)}}" class="post-title">{{$lq->news_title}}</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Comment Area Start -->
                            <div class="comment_area clearfix mb-50">

                                <!-- Section Title -->
                                <div class="section-heading style-2">
                                    <h4>Phản hồi từ bạn đọc</h4>
                                    <div class="line"></div>
                                </div>

                                <ul>
                                    @foreach($show_cmt as $key => $cmt)
                                    <!-- Single Comment Area -->
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="{{asset('public/frontend/31.jpg')}}" alt="author">
                                            </div>
                                            <!-- Comment Meta -->

                                            <div class="comment-meta">
                                                <h6>{{$cmt->name}}</h6>
                                                <a href="#" class="comment-date">{{$cmt->cmt_created_at}}</a>
                                                <p>{{$cmt->cmt_content}}</p>
                                                <div class="d-flex align-items-center">
                                                    <button aria-expanded="false"  class="btn btn-danger"
                                                    data-toggle="collapse" data-target="#box{{$cmt->cmt_id}}">Xem phản hồi</button>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <div class="collapse mb-3" id="box{{$cmt->cmt_id}}">
                                    @foreach($show_reply_cmt as $key => $repcmt)
                                    @if($repcmt->cmt_id==$cmt->cmt_id)
                                    <ol class="children ">

                                            <li class="single_comment_area">
                                                <!-- Comment Content -->
                                                <div class="comment-content d-flex">
                                                    <!-- Comment Author -->
                                                    <div class="comment-author">
                                                        <img src="{{asset('public/frontend/32.jpg')}}" alt="author">

                                                    </div>
                                                    <!-- Comment Meta -->
                                                    <div class="comment-meta">
                                                        <h6>{{$repcmt->name}}</h6>
                                                        <a href="#" class="comment-date">{{$repcmt->reply_cmt_created_at}}</a>
                                                        <p>{{$repcmt->reply_cmt_content}}</p>
                                                    </div>
                                            </li>
                                        </ol>

                                    @endif
                                    @endforeach
                                    @if(isset($user_id))
                                      <form action="{{URL::to('/save-reply-cmt/'.$user_id.'/'.$value->news_id.'/'.$cmt->cmt_id)}}" method="post">
                                         {{ csrf_field() }}
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="col-12 col-lg-6">
                                                                    <input style="color:#00FFFF" type="text" class="form-control" name="replycmt" id="name" placeholder="Nhập phản hồi của bạn">
                                                                    <input type="hidden" name="slug" value="{{$value->news_slug}}">
                                                                    <button class="btn vizew-btn mt-10" type="submit"> Phản hồi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    @endif
                                    </div>
                                    @endforeach


                                </ul>

                                  @if(isset($user_id))
                                <div class="section-heading style-2">
                                    <h4>Bình luận</h4>
                                    <div class="line"></div>
                                </div>
                                <div class="contact-form-area">
                                    <form action="{{URL::to('/save-cmt/'.$user_id.'/'.$value->news_id)}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-12">
                                                <textarea style="color:#00FFFF" name="comment" class="form-control " id="comment" placeholder="Bình luận"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <input type="hidden" name="slug" value="{{$value->news_slug}}">
                                                <button class="btn vizew-btn mt-30" type="submit">Bình luận</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @else
                                <a href="{{URL::to('/show-login')}}"><button class="btn vizew-btn w-100 mt-30">Đăng nhập để bình luận</button></a>
                                @endif
                            </div>

                        </div>
                    </div>
@endforeach
@endsection
