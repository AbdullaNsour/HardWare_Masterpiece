@extends('layout')
@section('title')
    {{ $product->name }}
@endsection
@section('body')

<style>
    .product-image-wrapper{
        /* background-color: blue; */
        height: 70vh; 
        
    }
</style>
    <div class="col-sm-9 padding-right">
        <div class="product-details">
            <!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{ asset("uploads/$product->img") }}" alt="" />
                </div>
            </div>
            <div class="col-sm-7">
                <div class="product-information">
                    <!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2>{{ $product->name }}</h2>
                    <p><b>Model:</b> {{ $product->model }}</p>
                    <span>
                        @if ($product->sale_price != null)
                            <p class="text-danger" style="font-size: 2rem"><del>{{ number_format($product->price ,2) }}
                                    JD</del></p>
                            <span>{{ number_format($product->sale_price ,2) }} JD</span>
                        @else
                            <span>{{ number_format($product->price ,2) }} JD</span>
                        @endif
                        @if ($product->stock == 'in Stock')

                            <a href="{{ url("/addtocart/$product->id") }}">
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </a>
                        @endif

                    </span>
                    <p><b>Availability : </b>{{ $product->stock }}</p>
                    <p><b>Brand:</b> {{ $product->brand->name }}</p>
                    <p><b>Category:</b> {{ $product->cat->name }}</p>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
                </div>
                <!--/product-information-->
            </div>
        </div>
        <!--/product-details-->
        @if ($product->discreption != null)
            <h2 class="title text-center">Product details</h2>
            <div  class="recommended_items">
                <h4 class="col-sm-10" >
                    {{ $product->discreption }}
                </h4>
            </div>
        @endif
        <div style="height: 40rem" class="recommended_items">
            <!--recommended_items-->
            <h2 class="title text-center">From the same brand</h2>
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        @if ($productsBrandCount > 2)
                            @for ($i = 0; $i < 3; $i++)
                                <div class="col-sm-4" >
                                    <div class="product-image-wrapper " >
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="{{ url('/products/show/' . $brandProducts[$i]->id) }}">
                                                    <img style="height: 25vh; width: 55%"
                                                        src="{{ asset('uploads/' . $brandProducts[$i]->img) }}" alt="" />
                                                    <div >
                                                        @if ($brandProducts[$i]->sale_price != null)
                                                            <h5 class="text-danger">
                                                                <del>{{ number_format($brandProducts[$i]->price ,2) }}
                                                                    JD</del>
                                                            </h5>
                                                            <h2 >
                                                                {{ number_format($brandProducts[$i]->sale_price ,2) }}</h2>
                                                        @else
                                                            <h2 style="height: 6rem;max-height: 6rem">
                                                                {{ number_format($brandProducts[$i]->price ,2) }}</h2>
                                                        @endif
                                                    </div>
                                                    <p>{{ $brandProducts[$i]->name }}</p>
                                                </a>
                                                @if ($brandProducts[$i]->stock == 'in Stock')
                                                    <a href="{{ url('/addtocart/' . $brandProducts[$i]->id) }}">
                                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @else
                            @for ($i = 0; $i < $productsBrandCount; $i++)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products" style="height: 30rem;max-height: 30rem">
                                            <div class="productinfo text-center">
                                                <a href="{{ url('/products/show/' . $brandProducts[$i]->id) }}">
                                                    <img style="height: 25vh; width: 55%"
                                                        src="{{ asset('uploads/' . $brandProducts[$i]->img) }}" alt="" />
                                                    <div >
                                                        @if ($brandProducts[$i]->sale_price != null)
                                                            <h5 class="text-danger">
                                                                <del>{{ number_format($brandProducts[$i]->price ,2) }}
                                                                    JD</del>
                                                            </h5>
                                                            <h4 >
                                                                {{ number_format($brandProducts[$i]->sale_price ,2) }}</h4>
                                                        @else
                                                            <h4 style="height: 6rem;max-height: 6rem">
                                                                {{ number_format($brandProducts[$i]->price ,2) }}</h4>
                                                        @endif
                                                    </div>
                                                    <p>{{ $brandProducts[$i]->name }}</p>
                                                </a>
                                                @if ($brandProducts[$i]->stock == 'in Stock')
                                                    <a href="{{ url('/addtocart/' . $brandProducts[$i]->id) }}">
                                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                    @if ($productsBrandCount > 3)
                        <div class="item">
                            @for ($i = 3; $i < $productsBrandCount; $i++)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products" style="height: 30rem;max-height: 30rem">
                                            <div class="productinfo text-center">
                                                <a href="{{ url('/products/show/' . $brandProducts[$i]->id) }}">
                                                    <img style="height: 25vh; width: 55%"
                                                        src="{{ asset('uploads/' . $brandProducts[$i]->img) }}" alt="" />
                                                    <div >
                                                        @if ($brandProducts[$i]->sale_price != null)
                                                            <h5 class="text-danger">
                                                                <del>{{ number_format($brandProducts[$i]->price ,2) }}
                                                                    JD</del>
                                                            </h5>
                                                            <h4 >
                                                                {{ number_format($brandProducts[$i]->sale_price ,2) }}</h4>
                                                        @else
                                                            <h4 style="height: 6rem;max-height: 6rem">
                                                                {{ number_format($brandProducts[$i]->price ,2) }}</h4>
                                                        @endif
                                                    </div>
                                                    <p>{{ $brandProducts[$i]->name }}</p>
                                                </a>
                                                @if ($brandProducts[$i]->stock == 'in Stock')
                                                    <a href="{{ url('/addtocart/' . $brandProducts[$i]->id) }}">
                                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endfor
                        </div>
                    @endif
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!--/recommended_items-->
        <div style="height: 40rem" class="recommended_items">
            <!--recommended_items-->
            <h2 class="title text-center">From the same category</h2>
            <div id="recommended-item-carousel2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        @if ($productsCatCount > 2)
                            @for ($i = 0; $i < 3; $i++)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper" style="height: 55vh">
                                        <div class="single-products" style="height: 30rem;max-height: 30rem">
                                            <div class="productinfo text-center">
                                                <a href="{{ url('/products/show/' . $catProducts[$i]->id) }}">
                                                    <img style="height: 25vh; width: 55%"
                                                        src="{{ asset('uploads/' . $catProducts[$i]->img) }}" alt="" />
                                                    <div >
                                                        @if ($catProducts[$i]->sale_price != null)
                                                            <h5 class="text-danger">
                                                                <del>{{ number_format($catProducts[$i]->price ,2) }}
                                                                    JD</del>
                                                            </h5>
                                                            <h2 >
                                                                {{ number_format($catProducts[$i]->sale_price ,2) }}</h2>
                                                        @else
                                                            <h4 style="height: 6rem;max-height: 6rem">
                                                                {{ number_format($catProducts[$i]->price ,2) }}</h4>
                                                        @endif
                                                    </div>
                                                    <p>{{ $catProducts[$i]->name }}</p>
                                                </a>
                                                @if ($catProducts[$i]->stock == 'in Stock')
                                                    <a href="{{ url('/addtocart/' . $catProducts[$i]->id) }}">
                                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @else
                            @for ($i = 0; $i < $productsCatCount; $i++)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products" style="height: 30rem;max-height: 30rem">
                                            <div class="productinfo text-center">
                                                <a href="{{ url('/products/show/' . $catProducts[$i]->id) }}">
                                                    <img style="height: 25vh; width: 55%"
                                                        src="{{ asset('uploads/' . $catProducts[$i]->img) }}" alt="" />
                                                    <div >
                                                        @if ($catProducts[$i]->sale_price != null)
                                                            <h5 class="text-danger">
                                                                <del>{{ number_format($catProducts[$i]->price ,2) }}
                                                                    JD</del>
                                                            </h5>
                                                            <h4 >
                                                                {{ number_format($catProducts[$i]->sale_price ,2) }}</h4>
                                                        @else
                                                            <h4 style="height: 6rem;max-height: 6rem">
                                                                {{ number_format($catProducts[$i]->price ,2) }}</h4>
                                                        @endif
                                                    </div>
                                                    <p>{{ $catProducts[$i]->name }}</p>
                                                </a>
                                                @if ($catProducts[$i]->stock == 'in Stock')
                                                    <a href="{{ url('/addtocart/' . $catProducts[$i]->id) }}">
                                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                    @if ($productsCatCount > 3)
                        <div class="item">
                            @for ($i = 3; $i < $productsCatCount; $i++)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products" style="height: 30rem;max-height: 30rem">
                                            <div class="productinfo text-center">
                                                <a href="{{ url('/products/show/' . $catProducts[$i]->id) }}">
                                                    <img style="height: 25vh; width: 55%"
                                                        src="{{ asset('uploads/' . $catProducts[$i]->img) }}" alt="" />
                                                    <div >
                                                        @if ($catProducts[$i]->sale_price != null)
                                                            <h5 class="text-danger">
                                                                <del>{{ number_format($catProducts[$i]->price ,2) }}
                                                                    JD</del>
                                                            </h5>
                                                            <h4 >
                                                                {{ number_format($catProducts[$i]->sale_price ,2) }}</h4>
                                                        @else
                                                            <h4 style="height: 6rem;max-height: 6rem">
                                                                {{ number_format($catProducts[$i]->price ,2) }}</h4>
                                                        @endif
                                                    </div>
                                                    <p>{{ $catProducts[$i]->name }}</p>
                                                </a>
                                                @if ($catProducts[$i]->stock == 'in Stock')
                                                    <a href="{{ url('/addtocart/' . $catProducts[$i]->id) }}">
                                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endfor
                        </div>
                    @endif
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel2" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel2" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!--/recommended_items-->

    </div>
@endsection
