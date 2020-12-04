@extends('layouts.admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>{{$table}} Table</b></h4>
                <p class="text-muted font-13">

                    <a href="{{route('jobs.create')}}" class="btn btn-success" role="button">Add
                        Job</a><br><br>

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
                        <th data-field="department_en" data-align="center" data-sortable="true">Department Name English</th>
                        <th data-field="title_ar" data-align="center" data-sortable="true">Title Arabic</th>
                        <th data-field="title_en" data-align="center" data-sortable="true">Title English</th>
                        <th data-field="image" data-align="center" data-sortable="true">Image</th>
                        <th data-field="intro_ar" data-align="center" data-sortable="true">Intro Arabic</th>
                        <th data-field="intro_en" data-align="center" data-sortable="true">Intro English</th>
                        <th data-field="description_ar" data-align="center" data-sortable="true">Description Arabic</th>
                        <th data-field="description_en" data-align="center" data-sortable="true">Description English</th>
                        <th data-field="location_ar" data-align="center" data-sortable="true">Location Arabic</th>
                        <th data-field="location_en" data-align="center" data-sortable="true">Location English</th>
                        <th data-field="requirements_ar" data-align="center" data-sortable="true">Requirements Arabic</th>
                        <th data-field="requirements_en" data-align="center" data-sortable="true">Requirements English</th>
                        <th data-field="salary" data-align="center" data-sortable="true">Salary</th>
                        {{--          <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                                  <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>--}}
                        <th data-field="status" data-align="center" data-sortable="true"
                            data-formatter="statusFormatter">Action
                        </th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td>{{$job->department->title_en}}</td>
                            <td>{{$job->title_ar}}</td>
                            <td>{{$job->title_en}}</td>
                            <td><img src="{{URL::to('jobs/'.$job->image)}}" style="width: 100px; height: 100px;"></td>
                            <td>{{str_limit($job->intro_ar,$limit=50,$end='...')}}</td>
                            <td>{{str_limit($job->intro_en,$limit=50,$end='...')}}</td>
                            <td>{{str_limit($job->description_ar,$limit=50,$end='...')}}</td>
                            <td>{{str_limit($job->description_en,$limit=50,$end='...')}}</td>
                            <td>{{$job->location_ar}}</td>
                            <td>{{$job->location_en}}</td>
                            <td>{{(str_limit($job->requirements_ar,$limit=50,$end='...'))}}</td>
                            <td>{{str_limit($job->requirements_en,$limit=50,$end='...')}}</td>
                            <td>{{$job->salary}}</td>
                            <td  style="text-align: center;"><a href="{{route('jobs.show',$job->id)}}" class="btn btn-info" role="button">View</a>
                                <a href="{{route('jobs.edit',$job->id)}}" class="btn btn-warning" role="button">Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deletejobs_{{$job->id}}">Delete
                                </button>
                                <div class="modal" tabindex="-1" role="dialog" id="deletejobs_{{$job->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" style="color: black"><b> Do you want to delete this job ? </b></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-footer">
                                                {{ Form::open(['method' => 'delete','route' =>['jobs.destroy',$job->id]])}}

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
