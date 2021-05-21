@extends('admin.khung')
@section('content')
<div style="height: 100vh!important;">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-tasks"></i>
            <a href="#">Crawl Data</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Thiết lập Crawl</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Thiết lập</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <tr>
                        <th>Crawl dữ liệu từ trang khác</th>
                        <td>
                            <input type="checkbox" class="js-quantityCheckBox3" @if($get->crawl_yn==1) checked @endif >
                        </td>
                    </tr>
                    <tr id="amount_crawl" @if($get->crawl_yn==0)style="display: none" @endif>
                        <th>Số mẩu tin crawl</th>
                        <td><input type="number" value="{{$get->amount_crawl}}" class="amount" onchange="doislmautin()"></td>
                    </tr>
                    <tr id="mc_crawl" @if($get->crawl_yn==0) style="display: none" @endif>
                        <th>Sử dụng Machine Learning để phân loại dữ liệu </th>
                        <td>
                            <input type="checkbox" class="js-quantityCheckBox4" @if($get->mc_crawl==1) checked @endif >
                        </td>
                    </tr>
                </table>
            </div>
        </div><!--/span-->
    </div>
</div>
@endsection
