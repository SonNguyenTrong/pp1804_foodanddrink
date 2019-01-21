@extends('user.master')
@section('content')
//
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Order
</button>
<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                powerless
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
//
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLabel">p2</button>
<div class="modal" id="modalLabel" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">powerless</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
//
<div class="noidung p-4 text-sm-center">
    <div class="container">
        <h5 class="toprate">{{ trans('messages.toprate') }}</h5>
        <div class="row">
            @foreach($listProduct as $key => $product)
            <div class="col-sm-4">
                <div class="card text-white border-light bg-dark mb-3 sanpham">
                    <img class="card-img-top anhproduct" src="{{ $product->images }}" alt="">
                    <div class="card-block text-sm-center">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <form name="addToCartForm">
                            <button data-product-id="{{ $product->id }}" data-product-name="{{ $product->name }}" type="button" class="btn btn-primary detail-order" data-toggle="modal" data-target="#exampleModal">{{ trans('messages.detail') }}</button>
                            <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                <!-- HEADER -->
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('messages.close' )}}</button>
                                            <input type="submit" class="btn btn-primary m-3 submitbutton" value="Order"/>
                                            <select name="quantity" class="quantitybox">
                                                <option value="1">1 </option>
                                                <option value="2">2 </option>
                                                <option value="3">3 </option>
                                                <option value="4">4 </option>
                                                <option value="5">5 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $listProduct->links() }}
    </div>
    {{-- end container --}}
</div>
{{-- end foodlist --}}
<script type="text/javascript">
    var productId;
    $('.detail-order').click(function(){
        productId = $(this).data('product-id');
        var nameProduct = $(this).data('product-name');
        $(".detail-product").remove();
        $(".modal-body").append($("<p>", {
            class: "detail-product",
            css: {
                'float': 'left',
                'color': 'black',
            }
        }).text('Name:' + nameProduct));
    });

    $('.submitbutton').click(function() {
        var quantity = $('[name=quantity]').val();
        var baseUrl = window.location.origin+window.location.pathname.split('/')[0] + '/';
        var url = baseUrl + ('cart');
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                'product_id': productId, 
                'quantity' : quantity,
                _token: $('meta[name="csrf-token"]').attr('content'),
            },
            
            success: function (data) {
                return data;
            }
        });
    });
</script>
@stop
@section('script')
<script>
    $(document).ready(function() {
        console.log( "ready!" );
        $(".btn-order").on('click', function() {
            //$("p").slideToggle();
            var btn_id = $(this).data('id');
                $.ajax({
                url: '',
                type: 'POST',
                //dataType: 'jsonp',
                data: {
                    'id': order_id
                },
                success: function(data) {
                    var $title = $('<h1>').text(data.talks[0].talk_title);
                    var $description = $('<p>').text(data.talks[0].talk_description);
                    $('#info')
                        .append($title)
                        .append($description);
                },
                error: function() {
                    $('#info').html('<p>An error has occurred</p>');
                },
            });
        });
    });
</script>
@stop