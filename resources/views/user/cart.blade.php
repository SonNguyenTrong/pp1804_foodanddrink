@extends('user.master')
@section('content')
<div class="col-md-12-center">
    <div class="box-don-hang">
        <div class="row">
            <div class="col-md-6 ttsp">{{ trans('messages.detail') }}</div>
            <div class="col-md-2 dg">{{ trans('messages.price') }}</div>
            <div class="col-md-2 sl">{{ trans('messages.quantity') }}</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row content">
            <div class="container-fluid" id="update_cart">
                <div class="row item" id="cart_combo_80_1">
                    @foreach($cartCollection as $key => $cartItem)
                        <div class="col-md-6 col-sm-6 ttsp">
                            <div class="row">
                                <div class="col-xs-12 nuthieuchinh">
                                    <form method="POST" action = "{{ route('removeItem' , ['id' => $cartItem->id]) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a class="btn button-close removebtn">
                                            <button onclick="return confirm_delete()" type="submit" class="fa fa-trash"></button>
                                        </a>

                                    </form>
                                    <span class="pname">{{ $cartItem->name }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <img src="{{ $cartItem->image }}" class="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-md-2 giatien">
                                <div class="price ml-3" id="after_price_combo_80_1">{{ $cartItem->price }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 offset-md-2">
                                <div class="quantitycart offset-md-2">{{ $cartItem->quantity }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container-fluid">    
                <div class="col-md-12-push-2 totalamount">
                    <div class="clearfix b-mobile b-left">
                        <label class="nhan">{{ trans('messages.totalprice') }}</label>
                    </div>
                    <div class="price b-mobile b-right clearfix">
                        <div class="totalprice"> 67.<small>000</small> <small>VNĐ</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function confirm_delete() {
        return confirm('{{ trans('messages.confirm') }}');
    }
</script>
@stop
