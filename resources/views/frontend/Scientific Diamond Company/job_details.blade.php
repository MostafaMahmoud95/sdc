@extends('layouts.front.Scientific Diamond Company.front')
@section('title')
    @if(App::isLocale('ar'))
        تفاصيل الوظيفة
    @else
        Job Details
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
    @if((Session::has('Applied')))
        <div class="alert alert-success" style="text-align: center">{{ Session::get('Applied') }}

        </div>
    @endif
    @if((Session::has('تم التقدم')))
        <div class="alert alert-success" style="text-align: center">{{ Session::get('تم التقدم') }}

        </div>
    @endif

    <section style=" margin: 150px 0;" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="card mx-auto job-details-card">
                    <img class="card-img-top jobs-image job-details-image" src="./assets/img/building.png" alt="">
                    <div class="card-body job-card-body">
                        <h5 class="card-title"> @if(App::isLocale('en'))  {{$job->title_en}} @else {{$job->title_ar}} @endif</h5>
                        <h6 class="card-title">  @if(App::isLocale('en'))  {{$job->location_en}} @else {{$job->location_ar}} @endif</h6>
                        <h6></h6>

                        <h6>@if($job->salary==0) {{trans('sdc.salary')}}
                            : {{trans('sdc.negotiable')}} @else {{trans('sdc.salary')}}
                            : {{$job->salary}} {{trans('sdc.sar')}} @endif</h6>
                        <p class="card-text">
                            @if(App::isLocale('en'))  {{$job->intro_en}} @else {{$job->intro_ar}} @endif

                        </p>
                        <h5 class="card-title">{{trans('sdc.job requirements')}}</h5>
                        <p class="card-text">
                            @if(App::isLocale('en'))  {{$job->requirements_en}} @else {{$job->requirements_ar}} @endif
                        </p>
                        <h5 class="card-title">{{trans('sdc.job description')}}</h5>
                        <p class="card-text">@if(App::isLocale('en'))  {{$job->description_en}} @else {{$job->description_ar}} @endif</p>

                        <h6 class="card-text"></h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row mx-auto"><h5 id="job-apply-title">{{trans('sdc.apply now ')}}</h5></div>
                <form class="col-lg-12" action="{{url('sdc/apply')}}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="department_id" value="1">
                    <input type="hidden" name="job_id" value="{{$job->id}}">

                    <div class="form-row">
                        <div class="col-lg-6 mb-3">
                            <label for="Username">{{trans('sdc.username')}}</label>
                            <input type="text" class="form-control" name="username" id="username"
                                   placeholder="{{trans('sdc.username')}}" required="required">
                            <p class="text-danger">{{$errors->first('username')}}</p>

                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="email">{{trans('sdc.email')}}</label>
                            <input type="text" class="form-control" name="email" id="email"
                                   placeholder="{{trans('sdc.email')}}" required="required">
                            <p class="text-danger">{{$errors->first('email')}}</p>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-6 mb-3">
                            <label for="phone">{{trans('sdc.phone')}}</label>
                            <input type="number" class="form-control" name="phone" id="phone"
                                   placeholder="{{trans('sdc.phone')}}">
                            <p class="text-danger">{{$errors->first('phone')}}</p>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cv">{{trans('sdc.cv')}}</label>
                        <input class="form-control" name="cv" id="cv" type="file" required="required">
                        <p class="text-danger">{{$errors->first('cv')}}</p>

                    </div>
                    <div class="form-group">
                        <label for="message">{{trans('sdc.message')}}</label>
                        <textarea class="form-control" id="message" name="message"
                                  placeholder="{{trans('sdc.message')}}"></textarea>
                        <p class="text-danger">{{$errors->first('message')}}</p>

                    </div>
                    <div class="row mx-auto">
                        <button type="submit" class="btn btn-primary apply-btn">{{trans('sdc.apply')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection