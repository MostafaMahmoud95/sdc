@extends('layouts.front.Scientific Diamond Company.front')
@section('title')
    @if(App::isLocale('ar'))
        تفاصيل الخدمة
    @else
        Service Details
    @endif
@endsection
@section('content')

    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">
                    @if(App::isLocale('en'))
                        {{$service->title_en}}
                    @else
                        {{$service->title_ar}}

                    @endif</h5>
                <h6 class="page-path">
                    @if(App::isLocale('en'))
                        Home / Our Services /   {{$service->title_en}}
                    @else
                        الرئيسية / خدماتنا /
                        {{$service->title_ar}}


                    @endif</h6>
            </div>
        </div>
    </div>


    <section id="product-details">
        <div class="row product-details-margin">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="container">

                    <div style="display: flex; flex-direction: column-reverse;">
                        <img src="{{URL::to('public/services/Scientific Diamond Company/'.$service->image)}}" alt=""
                             style="object-fit: cover;  height: 300px; width: 450px; ">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="details-main-content">
                        <div class="row">
                            <div class="container page-details-content">
                                <h5 class="page-details-title">@if(App::isLocale('en')) {{$service->title_en}} @else {{$service->title_ar}} @endif</h5>
                                <h6 class="page-details-title2">@if(App::isLocale('en')) {{$service->intro_en}} @else {{$service->intro_ar}} @endif</h6>
                                <p class="page-details-paragraph">
                                    @if(App::isLocale('en')) {{$service->description_en}} @else {{$service->description_ar}} @endif
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection