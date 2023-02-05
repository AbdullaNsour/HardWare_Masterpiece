@extends('DashBoard.dashLayout')
@section('tittle')
    Manage All Products
@endsection
@section('allproducts')
    active
@endsection
@section('css')
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .alert-danger {
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
        }

        .alert-danger .alert-link {
            color: #6a1a21;
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .product-image-wrapper {
            border: 1px solid #F7F7F5;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .single-products {
            position: relative;
        }

        .new,
        .sale {
            position: absolute;
            top: 0;
            right: 0;
        }

        .outStock {
            position: absolute;
            top: 0;
            left: 0;
        }

        .productinfo h2 {
            color: #3b7ddd;
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: 700;
        }

        .product-overlay h2 {
            color: #fff;
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: 700;
        }


        .productinfo p {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #696763;
        }

        .productinfo img {
            width: 100%;
        }

        .productinfo {
            position: relative;
        }

        .product-overlay {
            background: #3b7ddd;
            top: 0;
            display: none;
            height: 0;
            position: absolute;
            transition: height 500ms ease 0s;
            width: 100%;
            display: block;
            opacity: ;
        }

        .single-products:hover .product-overlay {
            display: block;
            height: 100%;
        }


        .product-overlay .overlay-content {
            bottom: 0;
            position: absolute;
            bottom: 0;
            text-align: center;
            width: 100%;
        }

        .product-overlay .add-to-cart {
            background: #fff;
            border: 0 none;
            border-radius: 0;
            color: #3b7ddd;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
        }

        .product-overlay .add-to-cart:hover {
            background: #fff;
            color: #3b7ddd;
        }


        .product-overlay p {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #fff;
        }


        .pagination {
            display: flex;
            justify-content: center;
            padding-left: 0;
            list-style: none;
            margin-bottom: 5rem;
        }

        .page-link {
            position: relative;
            display: block;
            color: #0d6efd;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #dee2e6;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .page-link {
                transition: none;
            }
        }

        .page-link:hover {
            z-index: 2;
            color: #0a58ca;
            background-color: #e9ecef;
            border-color: #dee2e6;
            text-decoration: none;

        }

        .page-link:focus {
            z-index: 3;
            color: #0a58ca;
            background-color: #e9ecef;
            outline: 0;
            text-decoration: none;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .page-item:not(:first-child) .page-link {
            margin-left: -1px;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff;
            border-color: #dee2e6;
        }

        .page-link {
            padding: 0.375rem 0.75rem;
        }

        .page-item:first-child .page-link {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .page-item:last-child .page-link {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .pagination-lg .page-link {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: 0.3rem;
            border-bottom-left-radius: 0.3rem;
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem;
        }

        .pagination-sm .page-link {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: 0.2rem;
            border-bottom-left-radius: 0.2rem;
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: 0.2rem;
            border-bottom-right-radius: 0.2rem;
        }
    </style>
@endsection
@section('body')
    <div class="container">
        <div class="">
            @include('errorrs')
        </div>
        <div class="table-title d-flex justify-content-between  ">
            <h2 class="text-light ">All <b>Products</b></h2>

            <form action="{{ url('/admin/filterproducts') }}" method="get" class="d-flex justify-content-between ">
                <input hidden type="text" name="keyword"
                    @if (isset($keyword)) value="{{ $keyword }}" @endif>

                <div class="row">
                    <label class="form-label col-2">Brand: </label>
                    <div class="col-sm-4">
                        <select class="form-select  " name="brand" aria-placeholder="Brand">
                            @if (isset($sbrand))
                                <option selected="" value="{{ $sbrand }}">{{ $sbrand }}</option>
                                @if ($sbrand != 'All')
                                    <option value="All">All</option>
                                @endif
                                @foreach ($brands as $brand)
                                    @if ($brand->name != $sbrand)
                                        <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option selected="">All</option>
                                @foreach ($brands as $brand)
                                    <option>{{ $brand->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <label class="form-label col-2">Category: </label>
                    <div class="col-sm-4">
                        <select class="form-select " name="cat">
                            @if (isset($scat))
                                <option selected="">{{ $scat }}</option>
                                @if ($scat != 'All')
                                    <option value="All">All</option>
                                @endif
                                @foreach ($cats as $cat)
                                    @if ($cat->name != $scat)
                                        <option>{{ $cat->name }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option selected="">All</option>
                                @foreach ($cats as $cat)
                                    <option>{{ $cat->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <input type="submit" value="Filter" class="btn btn-secondary " style="max-height: 40px ; margin-left: 25px">
            </form>


            <a class="btn btn-success " style="max-height: 40px" href="{{ url('/admin/addproduct') }}">
                <span class="align-middle" > <b>Add product</b> </span>
            </a>

        </div>

        {{-- table --}}


        <div class="text-center">
            {{-- <h3 class="my-3">Search:</h3> --}}
            <form class="d-flex justify-content-center mt-4 mb-3" action="{{ url('/admin/searchproducts') }}" method="get">
                <input hidden type="text" name="brand"
                    @if (isset($sbrand)) value="{{ $sbrand }}" @endif>
                <input hidden type="text" name="cat"
                    @if (isset($scat)) value="{{ $scat }}" @endif>

                <input class="form-control w-50 mx-3" type="text" name="keyword"
                    @if (isset($keyword)) value="{{ $keyword }}" @endif placeholder="Search keyword">
                <input type="submit" class="btn btn-success mx-3" value="Search">
            </form>




        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Old Price</th>
                    <th>NewPrice</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td><a href="{{ url("/admin/editproduct/$product->id") }}">
                            <img style="border-radius: 50%; width: 60px; height:60px;"
                                src="{{ asset("uploads/$product->img") }}" alt="" /></td>
                            </a>
                        <td>
                            <h5>{{ $product->name }}</h5>
                        </td>
                        <td>
                            <h4>
                                @if ($product->sale_price != null)
                                    <p class="text-danger">
                                        <del>{{ $product->price }} JD</del>
                                    </p>
                            </h4>
                        </td>
                        <td>
                            <h4>{{ number_format($product->sale_price, 2) }} JD</h4>
                        @else
                            <h4>{{ number_format($product->price, 2) }} JD</h4>
                            <h4>{{ number_format($product->price, 2) }} JD</h4>
                        </td>
                @endif
                <td>
                    <a href="{{ url("/admin/editproduct/$product->id") }}" class="btn btn-info"><i class="fas fa-edit"></i>
                        Edit</a>
                    <a href="{{ url("/admin/deleteproduct/$product->id") }}" class="btn btn-danger my-3"><i
                            class="fas fa-trash-alt"></i> Delete</a>
                </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
@section('pagintation')
    <div class="text-center">{{ $products->links() }}</div>
@endsection
