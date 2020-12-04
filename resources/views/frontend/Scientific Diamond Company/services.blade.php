@extends('layouts.front.Scientific Diamond Company.front')
@section('title')
    @if(App::isLocale('ar'))
        الخدمات
    @else
        Services
    @endif
@endsection
@section('content')

    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">{{trans('sdc.our services')}}</h5>
                <h6 class="page-path">{{trans('sdc.home/services')}}</h6>
            </div>
        </div>
    </div>
    <section id="products-section" class="products-page-cards">
        <div class="container">
            <div class="row">
                <h3 id="products-title" class="mx-auto">{{trans('sdc.our services')}}</h3>
            </div>
            <div class="row products-cards jobs-cards">
                @if($services)
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-12">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top"
                                     src="{{URL::to('services/Scientific Diamond Company/'.$service->image)}}"
                                     alt="">
                                <div class="card-body">
                                    <h5 class="card-title">

                                        @if(App::isLocale('en'))
                                            {{$service->title_en}}
                                        @else
                                            {{$service->title_ar}}

                                        @endif
                                    </h5>
                                    <p class="card-text">


                                        @if(App::isLocale('en'))
                                            {{$service->intro_en}}
                                        @else
                                            {{$service->intro_ar}}

                                        @endif
                                    </p>
                                    <a href="{{url('sdc/services/'.$service->slug)}}">{{trans('sdc.more')}}<i
                                                class="fas fa-long-arrow-alt-left"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </section>

@endsection