@extends('layouts.front.Scientific Diamond Laboratory.front')
@section('title')
    @if(App::isLocale('ar'))
        المنتجات
    @else
        Products
    @endif
@endsection
@section('content')

    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">{{trans('sdc.our products')}}</h5>
                <h6 class="page-path">{{trans('sdc.home/products')}}</h6>
            </div>
        </div>
    </div>
    <section id="products-section" class="products-page-cards">
        <div class="container">
            <div class="row">
                <h3 id="products-title" class="mx-auto">{{trans('sdc.our products')}}</h3>
            </div>
            <div class="row products-cards jobs-cards">
                @if($products)
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-12">
                            <a href="{{url('sdclab/products/'.$product->slug)}}">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top"
                                         src="{{URL::to('products/Scientific Diamond Lab/'.$product->image)}}"
                                         alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            @if(App::isLocale('en'))
                                                {{$product->title_en}}
                                            @else
                                                {{$product->title_ar}}

                                            @endif
                                        </h5>
                                        <p class="card-text">

                                            @if(App::isLocale('en'))
                                                {{$product->intro_en}}
                                            @else
                                                {{$product->intro_ar}}

                                            @endif

                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>

@endsection