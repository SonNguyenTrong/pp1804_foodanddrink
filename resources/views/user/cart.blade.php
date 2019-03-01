@extends('user.master')
@section('content')
<div class="col-md-12-center">
    <div class="box-don-hang">
        <div class="row">
            <div class="col-md-3 ac">{{ trans('messages.action')}}</div>
            <div class="col-md-3 ttsp">{{ trans('messages.detail') }}</div>
            <div class="col-md-3 dg">{{ trans('messages.price') }}</div>
            <div class="col-md-3 sl">{{ trans('messages.quantity') }}</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row content">
            @foreach($cartCollection as $key => $cartItem)
                <div class="col-md-3 col-md-offset-2">
                    <form method="POST" action = "{{ route('removeItem' , ['id' => $cartItem->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a class="btn button-close removebtn">
                            <button onclick="return confirm_delete()" type="submit" class="fa fa-trash fa-2x"></button>
                        </a>
                    </form>
                </div>
                <div class="col-md-3 col-md-offset-2">
                    <div class="pname">{{ $cartItem->name }}</div>
                </div>
                <div class="col-md-3 col-md-offset-2">
                    <div class="price" name="price">{{ $cartItem->price }}</div>
                </div>
                <div class="col-md-3 col-md-offset-2">
                    <div class="quantitycart" name="quantity">{{ $cartItem->quantity }}</div>
                </div>
            @endforeach
        </div>    

        <div class="container-fluid">    
            <div class="col-md-12-push-2 totalamount">
                <div class="clearfix b-mobile b-left">
                    <label class="nhan">{{ trans('messages.totalprice') }}</label>
                </div>
                <div class="price b-mobile b-right clearfix">
                    <div class="totalprice">{{ $total }}.000VND</div>
                </div>
                <a href="cartOrder" onclick="product.place_order();" class="btn btn-danger btn-lg btn-dk">{{ trans('messages.order') }}</a>
            </div>
        </div>
    </div>
</div>
@stop
