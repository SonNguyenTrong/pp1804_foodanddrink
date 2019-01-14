@extends('user.master')
@section('content')
<div class="col-md-12-center">
    <div class="box-don-hang">
        <div class="row">
            <div class="col-md-6 ttsp">Thông tin sản phẩm</div>
            <div class="col-md-2 dg">Dơn giá</div>
            <div class="col-md-2 sl">Số lượng</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row content">
            <div class="container-fluid" id="update_cart">
                <div class="row item" id="cart_combo_80_1">
                    <div class="col-md-6 col-sm-6 ttsp">
                        <div class="row">
                            <div class="col-xs-12 nuthieuchinh">
                                <a class="btn edit" onclick="product.edit_combo_cart('combo_80_1')">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a class="btn button-close" onclick="product.remove_product('combo_80_1');"><i class="fa fa-trash"></i></a>
                                <span class="pname">PRODUCT NAME</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ">
                                <img src="https://kfcvietnam.com.vn/uploads/combo/4764bb738eec2c8a5d5f2557963f2633.png" class="day la product image cua tao">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 giatien">
                            <div class="price" id="after_price_combo_80_1">67.000VNĐ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="quantitycart">1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">    
                <div class="col-md-12-push-2 totalamount">
                    <div class="clearfix b-mobile b-left">
                        <label class="nhan">TỔNG THANH TOÁN</label>
                    </div>
                    <div class="price b-mobile b-right clearfix">
                        <div class="totalprice"> 67.<small>000</small> <small>VNĐ</small></div>
                    </div>
                    <div class="clearfix b-btn-mobile">
                        <a href="javascript:void(0);" onclick="product.place_order();" class="btn btn-danger btn-lg btn-dk">đặt hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
