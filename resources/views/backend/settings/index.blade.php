@extends('layouts.admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>{{$table}} Table</b></h4>
                <p class="text-muted font-13">

                    <a href="{{route('settings.create')}}" class="btn btn-success" role="button">Add
                        Settings</a><br><br>

                </p>
                @if((Session::has('Added')))
                    <div class="alert alert-success">{{ Session::get('Added') }}
                        <i class="fa fa-check"
                           aria-hidden="true"></i>
                    </div>
                @endif
                @if((Session::has('Updated')))
                    <div class="alert alert-success">{{ Session::get('Updated') }}
                        <i class="fa fa-check"
                           aria-hidden="true"></i>
                    </div>
                @endif
                @if((Session::has('Deleted')))
                    <div class="alert alert-success">{{ Session::get('Deleted') }}
                        <i class="fa fa-check"
                           aria-hidden="true"></i>
                    </div>
                @endif

                <table data-toggle="table"
                       data-search="true"
                       data-show-refresh="false"
                       data-show-toggle="false"
                       data-show-columns="true"
                       data-sort-name="id"
                       data-page-list="[5, 10, 20]"
                       data-page-size="5"
                       data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
                    <thead>
                    <tr>
                        {{-- <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>--}}
                        <th data-field="department_en" data-align="center" data-sortable="true">Department Name</th>
                        <th data-field="intro_ar" data-align="center" data-sortable="true">Intro Arabic</th>
                        <th data-field="intro_en" data-align="center" data-sortable="true">Intro English</th>
                        <th data-field="vision_ar" data-align="center" data-sortable="true">Vision Arabic</th>
                        <th data-field="vision_en" data-align="center" data-sortable="true">Vision English</th>
                        <th data-field="mission_ar" data-align="center" data-sortable="true">Mission Arabic</th>
                        <th data-field="mission_en" data-align="center" data-sortable="true">Mission English</th>
                        <th data-field="message_ar" data-align="center" data-sortable="true">Message Arabic</th>
                        <th data-field="message_en" data-align="center" data-sortable="true">Message English</th>
                        <th data-field="values_ar" data-align="center" data-sortable="true">Values Arabic</th>
                        <th data-field="values_en" data-align="center" data-sortable="true">Values English</th>
                        <th data-field="goal_ar" data-align="center" data-sortable="true">Goal Arabic</th>
                        <th data-field="goal_en" data-align="center" data-sortable="true">Goal English</th>
                        <th data-field="whyus_ar" data-align="center" data-sortable="true">Why Us Arabic</th>
                        <th data-field="whyus_en" data-align="center" data-sortable="true">Why Us English</th>
                        <th data-field="address_eg_ar" data-align="center" data-sortable="true">Egypt Address Arabic
                        </th>
                        <th data-field="address_uae_ar" data-align="center" data-sortable="true">Emirates ddress
                            Arabic
                        </th>
                        <th data-field="address_ksa_ar" data-align="center" data-sortable="true"> Saudi Address Arabic
                        </th>
                        <th data-field="address_eg_en" data-align="center" data-sortable="true">Egypt Address English
                        </th>
                        <th data-field="address_uae_en" data-align="center" data-sortable="true">Emirates Address
                            English
                        </th>
                        <th data-field="address_ksa_en" data-align="center" data-sortable="true">Saudi Address English
                        </th>
                        <th data-field="email_egy" data-align="center" data-sortable="true">Egypt Email</th>
                        <th data-field="email_uae" data-align="center" data-sortable="true"> Emirates Email</th>
                        <th data-field="email_ksa" data-align="center" data-sortable="true">Saudi Email</th>
                        <th data-field="phone_eg" data-align="center" data-sortable="true">Egypt Phone</th>
                        <th data-field="phone_uae" data-align="center" data-sortable="true">Emirates Phone</th>
                        <th data-field="phone_ksa" data-align="center" data-sortable="true">Saudi Phone</th>
                        <th data-field="facebook" data-align="center" data-sortable="true">Facebook</th>
                        <th data-field="twitter" data-align="center" data-sortable="true">Twitter</th>
                        <th data-field="youtube" data-align="center" data-sortable="true">Youtube</th>
                        <th data-field="google+" data-align="center" data-sortable="true">Google+</th>
                        <th data-field="linkedin" data-align="center" data-sortable="true">Linkedin</th>

                        {{--          <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                                  <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>--}}
                        <th data-field="status" data-align="center" data-sortable="true"
                            data-formatter="statusFormatter">Action
                        </th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($settings as $setting)
                        <tr>
                            <td>{{$setting->department->title_en}}</td>
                            <td>{{(str_limit($setting->intro_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->intro_en,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->vision_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->vision_en,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->mission_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->mission_en,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->message_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->message_en,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->values_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->values_en,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->goal_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->goal_en,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->whyus_ar,$limit=50,$end='...'))}}</td>
                            <td>{{(str_limit($setting->whyus_en,$limit=50,$end='...'))}}</td>
                            <td>{{$setting->address_eg_ar}}</td>
                            <td>{{$setting->address_uae_ar}}</td>
                            <td>{{$setting->address_ksa_ar}}</td>
                            <td>{{$setting->address_eg_en}}</td>
                            <td>{{$setting->address_uae_en}}</td>
                            <td>{{$setting->address_ksa_en}}</td>
                            <td>{{$setting->email_egy}}</td>
                            <td>{{$setting->email_uae}}</td>
                            <td>{{$setting->email_ksa}}</td>
                            <td>{{$setting->phone_eg}}</td>
                            <td>{{$setting->phone_uae}}</td>
                            <td>{{$setting->phone_ksa}}</td>
                            <td>{{$setting->facebook}}</td>
                            <td>{{$setting->twitter}}</td>
                            <td>{{$setting->youtube}}</td>
                            <td>{{$setting->googleplus}}</td>
                            <td>{{$setting->linkedin}}</td>
                            <td style="text-align: center;"><a href="{{route('settings.show',$setting->id)}}"
                                                               class="btn btn-info" role="button">View</a>
                                <a href="{{route('settings.edit',$setting->id)}}" class="btn btn-warning"
                                   role="button">Edit</a>


                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
