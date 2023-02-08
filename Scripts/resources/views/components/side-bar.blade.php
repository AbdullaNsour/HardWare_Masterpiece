{{-- Category and Brand  --}}

<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian">
            <!--category-productsr-->
            @foreach ($cats as $cat)
                @if ($cat->products->count() > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <li>
                                <h4 class="panel-title w-75"><a href="{{ url("/cat/$cat->id") }}">{{ $cat->name }} <span class="text-danger pull-right">({{ $cat->products->count() }})</span> </a>
                                </h4> 
                            </li>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
        <!--/category-products-->


        <div class="brands_products">
            <h2>Brands</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    @foreach ($brands as $brand)
                        @if ($brand->products->count() > 0)
                            <li><a href="{{ url("/brand/$brand->id") }}"> <span
                                        class="text-danger pull-right">({{ $brand->products->count() }})</span>{{ $brand->name }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>
