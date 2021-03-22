@extends('layout')
@section('content')

                <div class="col-12 col-md-6">
                    <div class="login-content">
                        <br>
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h4>Đăng nhập tài khoản</h4>
                            <div class="line"></div>
                        </div>

                        <form action="{{URL::to('/user-login')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input style="color:#00FFFF" required type="email" class="form-control" id="email" name="email" placeholder="Nhập email ">
                                <input style="color:#00FFFF" required type="password" class="form-control" id="password" name="password" placeholder="Nhập password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Nhớ mật khẩu</label>
                                </div>
                            </div>
                            <button type="submit" class="btn vizew-btn w-100 mt-30">Đăng nhập</button>
                        </form>
                         <?php
                    $message = Session::get('message');
                    if($message){
                    echo $message;
                    Session::put('message',null);
                    }
                    ?>
                            <a href="{{URL::to('/show-dangky')}}"><button class="btn vizew-btn w-100 mt-30">Đăng ký</button></a>
                    </div>
                </div>

@endsection