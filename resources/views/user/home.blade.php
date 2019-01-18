@extends('user.master')

@section('content')
<div class="noidung p-4 text-sm-center">
    <div class="container">
        <h5 class="toprate">{{ trans('messages.toprate') }}</h5>
        <div class="row">
            @foreach($listProduct as $product)
            <div class="col-sm-4">
                <div class="card text-white border-light bg-dark mb-3 sanpham">
                    <img class="card-img-top anhproduct" src="{{ $product->images }}" alt="">
                    <div class="card-block text-sm-center">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <form name="addToCartForm">
                            <input type="hidden" class="inputid" value="{{ $product->id }}"/>
                            <input type="submit" class="btn btn-primary m-3 submitbutton" value="Order"/>
                            <select name="quantity" class="quantitybox">
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                            </select>
                        </form>    
                    </div>
                </div>
            </div>  
            @endforeach
        </div>
        {{ $listProduct->links() }}
    </div> {{-- end container --}}
</div>    {{-- end foodlist --}}

<script type="text/javascript">
    $('.submitbutton').click(function() {
        var quantity = $('[name=quantity]').val();
        var baseUrl = window.location.origin+window.location.pathname.split('/')[0] + '/';
        var url = baseUrl + ('cart')
        var pos = $(this).parent().find('.inputid').val();
        console.log(url);
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                'product_id': pos, 
                'quantity' : quantity,
                _token: $('meta[name="csrf-token"]').attr('content'),
            },
            
            success: function (data) {
                alert('Success');
            }
        });
    });
</script>
@stop