@extends('layouts.front.Scientific Diamond Company.front')
@section('title')
    @if(App::isLocale('ar'))
        من نحن
    @else
        About Us
    @endif
@endsection
@section('content')

    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">{{trans('sdc.about')}}</h5>
                <h6 class="page-path">{{trans('sdc.home/about')}}</h6>
            </div>
        </div>
    </div>

    <section style=" margin: 150px 0;" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="details-main-content">
                            <div class="row">
                                <div class="container page-details-content">
                                    <h5 class="page-details-title">{{trans('sdc.about')}}</h5>
                                    <p class="page-details-paragraph">@if(App::isLocale('en')) {{$settings->intro_en}} @else {{$settings->intro_ar}} @endif</p>
                                    <h6 class="page-details-title2">{{trans('sdc.our vision')}}</h6>
                                    <p class="page-details-paragraph">@if(App::isLocale('en')) {{$settings->vision_en}} @else {{$settings->vision_ar}} @endif</p>
                                    <h6 class="page-details-title2">{{trans('sdc.our message')}}</h6>
                                    <p class="page-details-paragraph">@if(App::isLocale('en')) {{$settings->message_en}} @else {{$settings->message_ar}} @endif</p>
                                    <h6 class="page-details-title2">{{trans('sdc.our mission')}}</h6>
                                    <p class="page-details-paragraph">@if(App::isLocale('en')) {{$settings->mission_en}} @else {{$settings->mission_ar}} @endif</p>
                                    <h6 class="page-details-title2">{{trans('sdc.our goal ')}}</h6>
                                    <p class="page-details-paragraph">@if(App::isLocale('en'))  {{$settings->goal_en}} @else {{$settings->goal_ar}} @endif</p>
                                    <h6 class="page-details-title2">{{trans('sdc.our values')}}</h6>
                                    <p class="page-details-paragraph">@if(App::isLocale('en')) {{$settings->values_en}} @else {{$settings->values_ar}} @endif</p>
                                    <h6 class="page-details-title2">{{trans('sdc.our whyus')}}</h6>
                                    <p class="page-details-paragraph">@if(App::isLocale('en')) {{$settings->whyus_en}} @else {{$settings->whyus_ar}} @endif</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection