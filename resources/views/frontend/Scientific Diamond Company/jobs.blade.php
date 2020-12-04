@extends('layouts.front.Scientific Diamond Company.front')
@section('title')
    @if(App::isLocale('ar'))
        الوظائف
    @else
        Jobs
    @endif
@endsection
@section('content')


    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">{{trans('sdc.jobs')}}</h5>
                <h6 class="page-path">{{trans('sdc.home/jobs')}}</h6>
            </div>
        </div>
    </div>
    <section id="products-section" class="products-page-cards">
        <div class="container">
            <div class="row products-cards jobs-cards">
                @if($jobs)
                    @foreach($jobs as $job)
                        <div class="col-lg-4 col-md-12">
                            <a href="{{url('sdc/jobs/'.$job->slug)}}" style="display: flex; flex-direction: column;">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top jobs-image" src="{{URL::to('jobs/'.$job->image)}}"
                                         alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">@if(App::isLocale('en')) {{$job->title_en}} @else {{$job->title_ar}} @endif</h5>
                                        <h6>@if(App::isLocale('en')) {{$job->location_en}} @else {{$job->location_ar}} @endif</h6>
                                        <h6>@if($job->salary==0){{trans('sdc.negotiable')}} @else{{$job->salary}} {{trans('sdc.sar')}} @endif</h6>
                                        <p class="card-text">
                                            @if(App::isLocale('en'))
                                                {{$job->intro_en}}
                                            @else
                                                {{$job->intro_ar}}

                                            @endif
                                        </p>
                                        <h6 class="card-text"></h6>
                                        {{--
                                                                                <h6>منذ يومين</h6>
                                        --}}
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