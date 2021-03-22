@extends('layout')
@section('content')

                <div class="col-12 col-md-6">
                    <div class="login-content">
                        <br>
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h4>Đăng ký tài khoản</h4>
                            <div class="line"></div>
                        </div>

                        <form action="{{URL::to('/user-dangky')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input style="color:#00FFFF" required type="text" class="form-control" id="name" name="name" placeholder="Nhập tên của bạn">
                                <input style="color:#00FFFF" required type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                                <input style="color:#00FFFF" required type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" >
                                <input style="color:#00FFFF" required type="password" class="form-control" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu" onchange="checkPasswordMatch()">
                                <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input stype="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Nhớ mật khẩu</label>
                                </div>
                            </div>
                            <button type="submit" class="btn vizew-btn w-100 mt-30">Đăng ký</button>
                        </form>
                            <?php
                    $message = Session::get('message');
                    if($message){
                    echo $message;
                    Session::put('message',null);
                    }
                    ?>
                            <a href="{{URL::to('/show-login')}}"><button class="btn vizew-btn w-100 mt-30">Đăng nhập</button></a>
                    </div>
                </div>

@endsection