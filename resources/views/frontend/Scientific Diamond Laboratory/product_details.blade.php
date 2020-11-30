@extends('layouts.front.Scientific Diamond Laboratory.front')
@section('title')
    @if(App::isLocale('ar'))
        تفاصيل المنتج
    @else
        Product Details
    @endif
@endsection
@section('content')

    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">
                    @if(App::isLocale('en'))
                        {{$product->title_en}}
                    @else
                        {{$product->title_ar}}

                    @endif</h5>
                <h6 class="page-path">

                    @if(App::isLocale('en'))
                        Home / Our Products /   {{$product->title_en}}
                    @else
                        الرئيسية / منتجاتنا /
                        {{$product->title_ar}}


                    @endif
                </h6>
            </div>
        </div>
    </div>


    <section id="product-details">
        <div class="row product-details-margin">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="container">

                    <div style="display: flex; flex-direction: column-reverse;">

                        <div id='thumb_container' style="display: flex; flex-direction: row;">
                            <img src='{{URL::to('public/products/Scientific Diamond Lab/'.$product->image)}}'
                                 alt='' onClick='sendimg(this);'>
                            @if($gallery)

                                @foreach($gallery as $one_row)
                                    <img src='{{URL::to('public/productsgalleries/'.$product->id.'/'.$one_row->image)}}'
                                         alt='' onClick='sendimg(this);'>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-md-9" id='main_image'>
                            <img id='mainimg'
                                 src='{{URL::to('public/products/Scientific Diamond Lab/'.$product->image)}}'
                                 alt=''>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="details-main-content">
                        <div class="row">
                            <div class="container page-details-content">
                                <h5 class="page-details-title">@if(App::isLocale('en')) {{$product->title_en}} @else {{$product->title_ar}} @endif</h5>
                                <h6 class="page-details-title2">@if(App::isLocale('en')) {{$product->intro_en}} @else {{$product->intro_ar}} @endif</h6>
                                <p class="page-details-paragraph">

                                    @if(App::isLocale('en')) {{$product->description_en}} @else {{$product->description_ar}} @endif
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('script')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>


    <script>
        function toggleIcon(e) {
            $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('fa-plus fa-minus');
        }

        $('.panel-group').on('hidden.bs.collapse', toggleIcon);
        $('.panel-group').on('shown.bs.collapse', toggleIcon);


        function sendimg(a) {
            document.getElementById('mainimg').src = a.src;

        }

    </script>
@endsection