@extends('layouts.admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>{{$table}} Table</b></h4>
                <p class="text-muted font-13">


                </p>

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
                        <th data-field="department" data-align="center" data-sortable="true">Department</th>
                        <th data-field="title_en" data-align="center" data-sortable="true">Job Title English</th>
                        <th data-field="username" data-align="center" data-sortable="true">Username</th>
                        <th data-field="email" data-align="center" data-sortable="true">Email</th>
                        <th data-field="phone" data-align="center" data-sortable="true">Phone</th>
                        <th data-field="message" data-align="center" data-sortable="true">Message</th>
                        <th data-field="cv" data-align="center" data-sortable="true">CV</th>
                        {{--          <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                                  <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>--}}
                        <th data-field="status" data-align="center" data-sortable="true"
                            data-formatter="statusFormatter">Action
                        </th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($requests as $request)
                        <tr>
                            <td>{{$request->department->title_en}}</td>
                            <td>{{$request->job->title_en}}</td>
                            <td>{{$request->username}}</td>
                            <td>{{$request->email}}</td>
                            <td>{{$request->phone}}</td>
                            <td>{{str_limit($request->message,$limit=50,$end='...')}}</td>
                            <td><a href="{{ url('cvs/'.$request->cv) }}" target="_blank">Download CV</a></td>
                            <td style="text-align: center;"><a href="{{route('jobrequests.show',$request->id)}}"
                                                               class="btn btn-info" role="button">View</a>

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
