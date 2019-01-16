@extends('user.master')
@section('content')

<h1 class="block-title mb-4 text-center">chinh lai lang Lịch sử đơn hàng</h1>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span id="search_concept">Filter by</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#madonhang">Mã đơn hàng</a></li>
                        <li><a href="#nhanvien">Nhân viên</a></li>
                        <li><a href="#trangthai">Trạng thái</a></li>
                        <li><a href="#diadiem">Địa điểm</a></li>
                        <li class="divider"></li>
                        <li><a href="#all">Anything</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
        <div class="row"></div>
        <div class="history-table">
            <div class="history-table-row history-table-heading">
                <div class="history-table-cell stt">STT</div>
                <div class="history-table-cell madonhang">Mã đơn hàng</div>
                <div class="history-table-cell thoigian">Thời gian</div>
                <div class="history-table-cell diadiem">Địa điểm</div>
                <div class="history-table-cell nhanvien">Nhân viên</div>
                <div class="history-table-cell tongtien">Tổng tiền</div>
                <div class="history-table-cell trangthai">Trạng thái</div>
                <div class="history-table-cell chitiet">Chi tiết</div>
            </div>
        </div>
    </div>
</div>
@stop
