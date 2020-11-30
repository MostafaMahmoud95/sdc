@extends('layouts.front.Scientific Diamond Laboratory.front')
@section('title')
    @if(App::isLocale('ar'))
        اتصل بنا
    @else
        Contact Us
    @endif
@endsection
@section('content')
    <div class="products-page-title">
        <div class="row">
            <div class="container page-header-title">
                <h5 class="page-title">{{trans('sdc.contact')}}</h5>
                <h6 class="page-path">{{trans('sdc.home/contact')}}</h6>
            </div>
        </div>
    </div>



    @if((Session::has('Sent')))
        <div class="alert alert-success" style="text-align: center;">{{ Session::get('Sent') }}

        </div>
    @endif
    @if((Session::has('تم')))
        <div class="alert alert-success" style="text-align: center">{{ Session::get('تم') }}

        </div>
    @endif
    <section style=" margin: 150px 0;" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-col" style="display: flex; flex-direction: column;">
                        <div class="branches-info">
                            <h5>{{trans('sdc.main branch')}}</h5>
                            <h6>@if(App::isLocale('en')) {{$settings->address_ksa_en}} @else {{$settings->address_ksa_ar}} @endif
                                <i class="icon-location-pin"></i></h6>
                            <h6>{{$settings->phone_ksa}} <i class="icon-phone"></i></h6>
                            <h6>{{$settings->email_ksa}}<i class="icon-envelope"></i></h6>
                        </div>
                        <div class="branches-info">
                            <h5>{{trans('sdc.egypt branch')}}</h5>
                            <h6> @if(App::isLocale('en')) {{$settings->address_eg_en}} @else {{$settings->address_eg_ar}} @endif
                                <i class="icon-location-pin"></i></h6>
                            <h6>{{$settings->phone_eg}}<i class="icon-phone"></i></h6>
                            <h6>{{$settings->email_egy}}<i class="icon-envelope"></i></h6>
                        </div>
                        <div class="branches-info">
                            <h5>{{trans('sdc.emirates branch')}}</h5>
                            <h6>@if(App::isLocale('en')) {{$settings->address_uae_en}} @else {{$settings->address_uae_ar}} @endif
                                <i class="icon-location-pin"></i></h6>
                            <h6>{{$settings->phone_uae}}<i class="icon-phone"></i></h6>
                            <h6>{{$settings->email_uae}}<i class="icon-envelope"></i></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="{{url('sdclab/contact')}}" method="POST">
                        <input type="hidden" name="department_id" value="2">
                        {!! csrf_field() !!}
                        <div class="form-row">
                            <div class="col-lg-6">
                                <label for="username">{{trans('sdc.username')}}</label>
                                <input type="text" class="form-control" name="username" id="user-name"
                                       placeholder="{{trans('sdc.username')}}">
                                <p class="text-danger">{{$errors->first('username')}}</p>

                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="email">{{trans('sdc.email')}}</label>
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="{{trans('sdc.email')}}">
                                <p class="text-danger">{{$errors->first('email')}}</p>

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-6 mb-3">
                                <label for="phone">{{trans('sdc.phone')}}</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       placeholder="{{trans('sdc.phone')}}">
                                <p class="text-danger">{{$errors->first('phone')}}</p>

                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="subject">{{trans('sdc.subject')}}</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="{{trans('sdc.subject')}}">
                                <p class="text-danger">{{$errors->first('subject')}}</p>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">{{trans('sdc.message')}}</label>
                            <textarea class="form-control" id="message" name="message"
                                      placeholder="{{trans('sdc.message')}}"></textarea>
                            <p class="text-danger">{{$errors->first('message')}}</p>

                        </div>
                        <button type="submit" class="btn btn-primary send-btn">{{trans('sdc.send')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1812.654850492766!2d46.66573499163592!3d24.681878316686547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1cb4350ca647%3A0xdc819cd6caee2e75!2sScientific+Diamond+Company!5e0!3m2!1sen!2seg!4v1524262360046"
                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endsection