@extends('admin.khung')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-tasks"></i>
            <a href="#">Quản lí tài khoản</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Danh sách tài khoản</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Danh sách tài khoản </h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert"><h3><b>   '.$message.'</h3></b></span>';
                Session::put('message',null);
            }
            ?>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Mã ID</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Quyền</th>
                        <th>Ngày tạo</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($show_lists as $key => $show_list)
                        <tr>
                            <td>{{ $show_list->id}}</td>
                            <td class="center">{{ $show_list->name}}</td>
                            <td class="center">{{ $show_list->email}}</td>
                            <td class="center">{{ $show_list->password}}</td>
                            @if($show_list->user_permision==0)
                            <td class="center">User</td>
                            @else
                                <td class="center">ADMIN</td>
                            @endif
                            <td class="center">{{\Carbon\Carbon::parse($show_list->created_at)->format("d/m/Y")}}</td>
                            <td class="center">
                                <a onclick="return confirm('Bạn có chắc là muốn xóa topic này ko ?')" class="btn btn-danger" href="{{URL::TO('/del-acc/'. $show_list->id)}}">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div>
@endsection
