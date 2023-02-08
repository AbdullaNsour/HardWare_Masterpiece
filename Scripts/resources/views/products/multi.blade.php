@extends('layout')
@section('title')
    {{ $tittle }}
@endsection
@section('slider')
<div id="slider">
    <figure>
        <img src="{{ asset("images/home/slid1.png") }}">
        <img src="{{ asset("images/home/slid2.png") }}">
        <img src="{{ asset("images/home/slid3.png") }}">
        <img src="{{ asset("images/home/slid1.png") }}">
        <img src="{{ asset("images/home/slid2.png") }}">
    </figure>
</div>



    <!--/slider-->
@endsection
@section('body')
    <div class="col-sm-9 padding-right ">
        <div class="features_items">
            <!--features_items-->
            <h2 class="title text-center">Products a</h2>

            @foreach ($products as $product)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center" style="height: 40rem">
                                <a href="{{ url("/products/show/$product->id") }}" style="height: 35rem">
                                    <img style="width: 100%; max-height: 35vh; min-height: 35vh" src="{{ asset("uploads/$product->img") }}"
                                        alt="" />
                                    <h2 style="height: 5rem"
                                        class="position-relative d-flex align-items-center justify-content-center">
                                        @if ($product->sale_price != null)
                                            <p class="text-danger" style="height: 2rem;font-size: 2rem">
                                                <del>{{ $product->price }} JD</del>
                                            </p>
                                            <h2 style="height: 5rem">{{ number_format($product->sale_price, 2) }} JD</h2>
                                        @else
                                            <h2 style="height: 5rem">{{ number_format($product->price, 2) }} JD</h2>
                                        @endif
                                    </h2>
                                    <h5 class="overflow-hidden" style="height: 5rem">{{ $product->name }}</h5>
                                </a>
                                @if ($product->stock == 'in Stock')
                                    <a href="{{ url("/addtocart/$product->id") }}" class="btn btn-default add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                @endif
                            </div>
                            @if ($product->sale_price != null)
                                <img src="{{ asset('images/home/sale.png') }}" class="new" alt="" />
                            @endif
                            @if ($product->stock != 'in Stock')
                                <img src="{{ asset('images/home/out-of-stock.png') }}" class="outStock" alt="" />
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
@section('paginate')
    <div class="text-center">{{ $products->links() }}</div>
@endsection
